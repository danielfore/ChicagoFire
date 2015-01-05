$element = $('.view-height');
function fixMobileSafariViewport() {
  $element.css('min-height', window.innerHeight);
}
window.addEventListener('orientationchange', fixMobileSafariViewport, true);
fixMobileSafariViewport();