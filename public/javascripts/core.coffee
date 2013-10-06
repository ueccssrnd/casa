$.stellar.positionProperty.apple =
  setTop: ($el, newTop, originalTop) ->
    $el.css(
      'top': newTop
      'left': $el.hasClass('hand') ? originalTop - newTop : 0
    )
    setLeft: ($el, newLeft, originalLeft) ->
      $el.css('left', newLeft);
        


$('.branding').find('.slide').list_ticker()
$("#navigation").sticky({topSpacing: 0})

$root = $('html, body');
$('#navigation').find('a').on 'click', (e)->
  href = $.attr(this, 'href')
  $root.animate(
    {scrollTop: $(href).offset().top - 80}
    500
    , () ->
      window.location.hash = href
  )
  return false

$('#mobile-nav').on('click', (e) ->
    $(@).find('ul').toggleClass('show-nav');
  )

$.stellar
  horizontalScrolling: false
  horizontalOffset: 0
  hideDistantElements: false
