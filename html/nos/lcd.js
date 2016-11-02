/*  Copyright (c) 2011 App-o-Trap LLC. All rights reserved.
 *
 *  This file may include components from the Closure Library which are
 *  Copyright 2006 The Closure Library Authors. These components are licensed
 *  under the Apache License, Version 2.0. You may obtain a full copy of the
 *  license from:
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 */
(function(){var b,j,f,g,h,e,c=0,k,l;b=document.getElementById("canvas");j=b.getContext("2d");(function(){var a,b;a=new window.ArrayBuffer(33554432);e=new window.Uint8Array(a);for(a=0;a<1048576;a++){b=Math.round(Math.random()*255);for(c=0;c<32;c++)e[a+1048576*c]=b}})();k=function(){var a,i,d;window.webkitRequestAnimationFrame(k,b);a=g*h*4;i=f.data;c>33554432-a&&(c=Math.round(Math.random()*(33554432-a)));for(d=0;d<a;d++)i[d++]=e[c++],i[d++]=e[c++],i[d++]=e[c++];j.putImageData(f,0,0)};l=function(){var a;
b.width=document.width;b.height=document.height;g=b.offsetWidth;h=b.offsetHeight;f=j.createImageData(g,h);for(a=0;a<g*h*4;a+=4)f.data[a+3]=255};window.onresize=l;l();k()})();
