BlurBGImage = {
  $bxWrapper : $('#bx-wrapper')
  $bxLoading : $('#bx-wrapper').find('div.bx-loading')
  $bxContainer : $('#bx-wrapper').find('div.bx-container')
  $bxImgs : $('#bx-wrapper').find('div.bx-container').children('img')
  bxImgsCount : $('#bx-wrapper').find('div.bx-container').children('img').length
  $thumbs : $('#bx-wrapper').find('div.bx-thumbs > a').hide()
  $title : $('#bx-wrapper').find 'h2:first'
  current : 0
  animOptions : { speed: 700, variation: 2, blurFactor: 10}
  isAnim : false
  supportCanvas : Modernizr.canvas
  slideshow_interval : 2000

  init : () ->
    loaded = 0
    $bxImgs.each( (i)->
      $bximg = $(@)
      $("<img data-pos=#{$bximg.index()}>").load(() ->
        $img = $(@)
        dim = getImageDim( $img.attr('src') )
        pos = $img.data('pos')
        $.when(createCanvas(pos, dim)).done(() ->
          ++loaded
          if loaded is bxImgsCount
            centerImageCanvas()
            $bxLoading.hide()
            initEvents()
            startSlideshow()
        )
      ).attr('src', $bximg.attr('src'));
    )
  startSlideshow : () ->
    slideshow_time = setTimeout( ()->
      if(!isAnim)
        pos = current
        pos if pos < bxImgsCount - 1 then ++pos else 0
        isAnim = true
        showImage pos
        startSlideshow()
    , slideshow_interval  
    )
  createCanvas : (pos, dim) ->
    return $.Deferred( (dfd) ->
      if !supportCanvas
        dfd.resolve()
        return false
      $img = $bxImgs.eq pos
      imgW = dim.width
      imgH = dim.height
      imgL = dim.left
      imgT = dim.top

      canvas = document.createElement 'canvas'

      canvas.className = 'bx-canvas'
      canvas.width = imgW
      canvas.height = imgH
      canvas.style.width = imgW + 'px'
      canvas.style.height = imgH + 'px'
      canvas.style.left = imgL + 'px'
      canvas.style.top = imgT + 'px'
      canvas.style.visibility = 'hidden'
      canvas.setAttribute 'data-pos', pos
      $bxContainer.append canvas
      stackBlurImage($img.get(0), dim,canvas,animOptions.blurFactor, false, dfd.reslove)
    ).promise()
  getImageDim : (img) ->
    $img = new Image()
    $img.src = img
    $win = $ window
    w_w = $win.width
    w_h = $win.height
    r_w = w_h/w_w
    i_w = $img.width
    i_h = $img.height
    r_i = i_h/i_w
    
    if r_w > r_w
      new_h = w_h
      new_w = w_h / r_i
    else
      new_h = w_w * r_i
      new_w = w_w
    return {
      width: new_w
      height: new_h
      left: (w_w - new_w) / 2
      top: (w_h - new_h) / 2
    }
  initEvents : () ->
    $(window).on('resize.BlurBGImage', (event) ->
      centerImageCanvas()
      return false
    )
    $thumbs.on('click.BlurBGImage', (event) ->
      $thumb = $(@)
      pos - $thumb.index()
      if !isAnim and post isnt current
        $thumbs.removeClass('bx-thumbs-current')
        $thumb.addClass 'bx-thumbs-current'
        isAnim = true
        return false
    )
  centerImageCanvas : () ->
    $bxImgs.each( (i) ->
      $bximg = $(@)
      dim = getImageDim($bximg.attr('src'))
      $currCanvas = $bxContainer.children("canvas[data-pos=#{$bximg.index()}]")
      styleCSS = {
        width: dim.width
        height: dim.height
        left: dim.left
        top: dim.top
      }
      $bximg.css styleCSS
      $currCanvas.css if supportCanvas
      $bximg.show() if i is current
    )
  showImage : (pos) ->
    $bxImage = $bxImgs.eq current
    $bxCanvas = $bxContainer.children("canvas[data-pos=#{$bxImage.index()}]")
    $bxNextImage = $bxImgs.eq pos
    $bxNextCanvas = $bxContainer.children("canvas[data-pos=#{$bxNextImage.index()}]")
    if supportCanvas
      $.when($title.fadeOut()).done(()->
        $title.text($bxNextImage.attr('title'))
      )
      $bxCanvas.css('z-index', 100).css('visibility', 'visible')
      $.when($bxImage.fadeOut(animOptions.speed)).done(()->
        switch animOptions.variation
          when 1
            $title.fadeIn(animOptions.speed)
            $when($bxNextImage.fadeIn(animOptions.speedn)).done(()->
              $bxCanvas.css('z-index',1).css('visibility', 'hidden')
              current = pos$bxNextCanvas.css('visibility', 'hidden')
              isAnim = false
            )
          when 2
            $bxNextCanvas.css('visibility','visible')
            $.when($bxCanvas.fadeOut(animOptions.speed * 1.5)).done(()->
              $(@).css({
                'z-index' : 1,
                'visibility': 'hidden'
              }).show()
              $title.fadeIn(animOptions.speed)
              $.when($bxNextImage.fadeIn(animOptions.speed)).done(()->
                current = pos
                $bxNextCanvas.css('visibility', 'hidden')
                isAnim = false
              )
            )
      )
    # if canvas not support
    else
      $title.hide().text($bxNextImage.attr('title')).fadeIn(animOptions.speed)
      $.when($bxNextImage.css('z-index', 102).fadeIn(animOptions.speed)).done(()->
        current = pos
        $bxImage.hide()
        $(@).css('z-index', 101)
        isAnim = false
      )
    return {
      init: init
    }}
BlurBGImage.init()