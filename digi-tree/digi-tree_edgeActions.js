/***********************
* Adobe Edge Animate Composition Actions
*
* Edit this file with caution, being careful to preserve 
* function signatures and comments starting with 'Edge' to maintain the 
* ability to interact with these actions from within Adobe Edge Animate
*
***********************/
(function($, Edge, compId){
var Composition = Edge.Composition, Symbol = Edge.Symbol; // aliases for commonly used Edge classes

   //Edge symbol: 'stage'
   (function(symbolName) {
      
      
      Symbol.bindSymbolAction(compId, symbolName, "creationComplete", function(sym, e) {
         var youtube = $("<iframe />");
         sym.$("video2").append(youtube);
         youtube.attr('type', 'text/html');
         youtube.prop('frameborder', 0);
         youtube.attr('width', '100%');
         youtube.attr('height', '100%');
         youtube.attr('src', '//www.youtube.com/embed/JNBFt0GJ3Qg?autoplay=1&controls=0');
         youtube.attr('allowfullscreen', 'yes');
         youtube.attr('style', 'border:0; border-radius:10px; z-index: 99; position:relative;');

      });
      //Edge binding end

   })("stage");
   //Edge symbol end:'stage'

   //=========================================================
   
   //Edge symbol: 'video'
   (function(symbolName) {   
   
   })("video");
   //Edge symbol end:'video'

   //=========================================================
   
   //Edge symbol: 'video2'
   (function(symbolName) {   
   
   })("video2");
   //Edge symbol end:'video2'

})(window.jQuery || AdobeEdge.$, AdobeEdge, "EDGE-187302");