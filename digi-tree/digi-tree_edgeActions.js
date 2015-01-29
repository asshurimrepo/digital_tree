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
         
         setTimeout(function(){
         	var youtube = $("<iframe />");
         	sym.$("video2").append(youtube);
         	youtube.attr('type', 'text/html');
         	youtube.prop('frameborder', 0);
         	youtube.attr('width', '100%');
         	youtube.attr('height', '100%');
         	youtube.attr('src', 'https://www.youtube.com/embed/WgpqNzXw4rc?autoplay=0&controls=0&rel=0');
         	youtube.attr('allowfullscreen', 'yes');
         	youtube.attr('style', 'border:0; border-radius:10px; z-index: 99; position:relative;');
         }, 3000);

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

   //=========================================================
   
   //Edge symbol: 'Preloader'
   (function(symbolName) {   
   
   })("Preloader");
   //Edge symbol end:'Preloader'

   //=========================================================
   
   //Edge symbol: 'services1'
   (function(symbolName) {   
   
      Symbol.bindTriggerAction(compId, symbolName, "Default Timeline", 9008, function(sym, e) {
         sym.play("loop");

      });
      //Edge binding end

   })("services1");
   //Edge symbol end:'services1'

   //=========================================================
   
   //Edge symbol: 'services2'
   (function(symbolName) {   
   
      Symbol.bindTriggerAction(compId, symbolName, "Default Timeline", 9304, function(sym, e) {
         sym.play("loop");

      });
      //Edge binding end

   })("services2");
   //Edge symbol end:'services2'

   //=========================================================
   
   //Edge symbol: 'services3'
   (function(symbolName) {   
   
      Symbol.bindTriggerAction(compId, symbolName, "Default Timeline", 7338, function(sym, e) {
         sym.play("loop");

      });
      //Edge binding end

   })("services3");
   //Edge symbol end:'services3'

   //=========================================================
   
   //Edge symbol: 'services4'
   (function(symbolName) {   
   
      Symbol.bindTriggerAction(compId, symbolName, "Default Timeline", 9461, function(sym, e) {
         sym.play("loop");

      });
      //Edge binding end

   })("services4");
   //Edge symbol end:'services4'

   //=========================================================
   
   //Edge symbol: 'root'
   (function(symbolName) {   
   
   })("root");
   //Edge symbol end:'root'

})(window.jQuery || AdobeEdge.$, AdobeEdge, "EDGE-187302");