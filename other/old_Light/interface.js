objTypes["interface"]={p_name:"折射率",create:function(e){return{obj:{type:"interface",p1:e,p2:graphs.point(e.x+gridSize,e.y),p:1.2},draggingPart:{part:2}}},draw:function(e,t){var n=t.getContext("2d");var r=Math.atan2(e.p1.x-e.p2.x,e.p1.y-e.p2.y)-Math.PI/2;var i=Math.atan2(e.p1.x-e.p2.x,e.p1.y-e.p2.y)+Math.PI/2;n.strokeStyle="rgba(192,192,192,0.5)";n.lineWidth=4;n.lineCap="butt";n.beginPath();n.moveTo(e.p1.x+Math.sin(r)*2,e.p1.y+Math.cos(r)*2);n.lineTo(e.p2.x+Math.sin(r)*2,e.p2.y+Math.cos(r)*2);n.stroke();n.strokeStyle="rgba(128,128,255,0.5)";n.lineWidth=4;n.beginPath();n.moveTo(e.p1.x+Math.sin(i)*2,e.p1.y+Math.cos(i)*2);n.lineTo(e.p2.x+Math.sin(i)*2,e.p2.y+Math.cos(i)*2);n.stroke();n.strokeStyle="rgba(0,0,0,255)";n.lineWidth=.5;n.beginPath();n.moveTo(e.p1.x,e.p1.y);n.lineTo(e.p2.x,e.p2.y);n.stroke();n.lineWidth=1;n.lineCap="butt"},move:function(e,t,n){e.p1.x=e.p1.x+t;e.p1.y=e.p1.y+n;e.p2.x=e.p2.x+t;e.p2.y=e.p2.y+n;return e},clicked:function(e,t){if(mouseOnPoint(t,e.p1)){return{draggingPart:{part:1}}}if(mouseOnPoint(t,e.p2)){return{draggingPart:{part:2}}}if(mouseOnSegment(t,e)){return{draggingPart:{part:0,mouse1:t}}}return false},dragging:function(e,t,n){if(n.part==1){e.p1=t;return{obj:e}}if(n.part==2){e.p2=t;return{obj:e}}if(n.part==0){var r=n.mouse1.x-t.x;var i=n.mouse1.y-t.y;e.p1.x=e.p1.x-r;e.p1.y=e.p1.y-i;e.p2.x=e.p2.x-r;e.p2.y=e.p2.y-i;return{obj:e,draggingPart:{part:0,mouse1:t}}}},rayIntersection:function(e,t){var n=graphs.intersection(graphs.line(t.p1,t.p2),graphs.line(e.p1,e.p2));if(graphs.length_segment(graphs.segment(n,e.p1))+graphs.length_segment(graphs.segment(n,e.p2))-graphs.length_segment(e)<1e-7&&(graphs.length_segment(graphs.segment(n,t.p1))+graphs.length_segment(graphs.segment(n,t.p2))-graphs.length_segment(t)<1e-7||graphs.length_segment(graphs.segment(n,t.p1))>graphs.length_segment(graphs.segment(n,t.p2)))){return n}},shot:function(e,t){var n=graphs.intersection(graphs.line(t.p1,t.p2),graphs.line(e.p1,e.p2));var r=Math.atan2(e.p1.y-e.p2.y,e.p1.x-e.p2.x);var i=Math.atan2(t.p1.y-n.y,t.p1.x-n.x);if(r>=0&&r>i&&i>r-Math.PI||r<0&&(i<r||i>r+Math.PI)){var s=r-Math.PI/2;var o=e.p}else{var s=r+Math.PI/2;var o=1/e.p}if(Math.abs(Math.sin(s-i)*o)>1){var u=s*2-i}else{var u=s+Math.PI-Math.asin(Math.sin(s-i)*o)}return graphs.ray(n,graphs.point(n.x+Math.cos(u),n.y+Math.sin(u)))}}
