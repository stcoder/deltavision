(function($, scope, undefined) {
    scope.ssItemParserimage = scope.ssItemParser.extend({
        parse: function(name, data){
            var o = this._super(name, data);
            if(name === 'size'){
                var _d = data.split('|*|');
                o.width = _d[0];
                o.height = _d[1];
                delete o.size;
            }
            else if(name === 'link'){
                var _d = data.split('|*|');
                o.url = _d[0];
                o.target = _d[1];
                o.cursor = _d[2];
                delete o.size;
            }else if(name === 'kenburns'){
                var _d = data.split('|*|');
                if(parseInt(_d[0])){
                    o.kenburnsclass = 'haskenburns ';
                }else{
                    o.kenburnsclass = '';
                }
                o.kenburnsduration = parseInt(_d[1])/1000;
                o.kenburnswidth = parseInt(_d[2]);
                o.kenburnssnap = _d[3];
            }
            return o;
        },
        render: function(node, data){
            if(data['url'] == '#'){
                node.html(node.children('a').html());
            }
            if(data.kenburnsclass != ''){
                var img = node.find('img');
                var id = img.attr('id');
                
                img.css('width', "").css('height', "");
                
                var snap = data.kenburnssnap.split('-');
                
                var style = '<style type="text/css">';
                style+='#nextend-smart-slider-0 #'+id+'{width:100%; max-width:none !important; -webkit-transition: all '+data.kenburnsduration+'s;-moz-transition: all '+data.kenburnsduration+'s;-o-transition: all '+data.kenburnsduration+'s;-ms-transition: all '+data.kenburnsduration+'s;transition: none all '+data.kenburnsduration+'s;  -moz-transform-origin:'+snap[1]+'; -ms-transform-origin:'+snap[1]+'; -webkit-transform-origin:'+snap[1]+'; transform-origin:'+snap[1]+';';
                
                var fn1 = function(){
                    setTimeout(function(){
                        node.closest('.smart-slider-items').css('height', '');
                    }, 100);
                },
                fn2 = function(){
                    setTimeout(function(){
                        node.closest('.smart-slider-items').css('height', '100%');
                    }, 100);
                };
                switch(snap[0]){
                    case '0':
                        fn1();
                        break;
                    case 'lt':
                        style+='position:absolute;left:0;top:0;right:auto;bottom:auto;';
                        fn2();
                        break;
                    case 'rt':
                        style+='position:absolute;left:auto;top:0;right:0;bottom:auto;';
                        fn2();
                        break;
                    case 'lb':
                        style+='position:absolute;left:0;top:auto;right:auto;bottom:0;';
                        fn2();
                        break;
                    case 'rb':
                        style+='position:absolute;left:auto;top:auto;right:0;bottom:0;';
                        fn2();
                        break;
                }
                style+='}';
                
                var r = data.kenburnswidth/100;
                style+='#smartslider-form #nextend-smart-slider-0 #'+id+'{ transition: none; width:100%; }';
                style+='.x-ready #nextend-smart-slider-0.nextend-loaded .smart-slider-slide-active #'+id+'{ width: '+data.kenburnswidth+'%; }';
                style+='.nextend-csstransforms.x-ready #nextend-smart-slider-0.nextend-loaded .smart-slider-slide-active #'+id+'{ width:100%; -moz-transform: scale('+r+','+r+'); -ms-transform: scale('+r+','+r+'); -webkit-transform: scale('+r+','+r+'); transform: scale('+r+','+r+'); }';
                
                
                style+='</style>';
                node.append(style);
            }
            return node;
        }
    });
})(njQuery, window);
