import{r as C}from"./jquery-2e737b56.js";import{r as E}from"./jquery.dataTables-ae179c23.js";import{r as L}from"./dataTables.buttons-e737a76f.js";import"./_commonjsHelpers-de833af9.js";import"./jquery.dataTables-6ae8652d.js";import"./jquery-eac64496.js";var M={exports:{}};/*!
 * Print button for Buttons and DataTables.
 * © SpryMedia Ltd - datatables.net/license
 */(function(x,P){(function(r){var l,f;l=C(),f=function(n,e){e.fn.dataTable||E(n,e),e.fn.dataTable.Buttons||L(n,e)},typeof window>"u"?x.exports=function(n,e){return n=n||window,e=e||l(n),f(n,e),r(e,n,n.document)}:(f(window,l),x.exports=r(l,window,window.document))})(function(r,l,f,n){function e(s){return p.href=s,(s=p.host).indexOf("/")===-1&&p.pathname.indexOf("/")!==0&&(s+="/"),p.protocol+"//"+s+p.pathname+p.search}var y=r.fn.dataTable,p=f.createElement("a");return y.ext.buttons.print={className:"buttons-print",text:function(s){return s.i18n("buttons.print","Print")},action:function(s,i,$,a){function b(t,h){for(var T="<tr>",c=0,q=t.length;c<q;c++){var A=t[c]===null||t[c]===n?"":t[c];T+="<"+h+" "+(g[c]?'class="'+g[c]+'"':"")+">"+A+"</"+h+">"}return T+"</tr>"}var m=i.buttons.exportData(r.extend({decodeEntities:!1},a.exportOptions)),u=i.buttons.exportInfo(a),g=i.columns(a.exportOptions.columns).flatten().map(function(t){return i.settings()[0].aoColumns[i.column(t).index()].sClass}).toArray(),d='<table class="'+i.table().node().className+'">';a.header&&(d+="<thead>"+b(m.header,"th")+"</thead>"),d+="<tbody>";for(var v=0,O=m.body.length;v<O;v++)d+=b(m.body[v],"td");d+="</tbody>",a.footer&&m.footer&&(d+="<tfoot>"+b(m.footer,"th")+"</tfoot>"),d+="</table>";var o=l.open("","");if(o){o.document.close();var w="<title>"+u.title+"</title>";r("style, link").each(function(){w+=function(t){return t=r(t).clone()[0],t.nodeName.toLowerCase()==="link"&&(t.href=e(t.href)),t.outerHTML}(this)});try{o.document.head.innerHTML=w}catch{r(o.document.head).html(w)}o.document.body.innerHTML="<h1>"+u.title+"</h1><div>"+(u.messageTop||"")+"</div>"+d+"<div>"+(u.messageBottom||"")+"</div>",r(o.document.body).addClass("dt-print-view"),r("img",o.document.body).each(function(t,h){h.setAttribute("src",e(h.getAttribute("src")))}),a.customize&&a.customize(o,a,i),u=function(){a.autoPrint&&(o.print(),o.close())},navigator.userAgent.match(/Trident\/\d.\d/)?u():o.setTimeout(u,1e3)}else i.buttons.info(i.i18n("buttons.printErrorTitle","Unable to open print view"),i.i18n("buttons.printErrorMsg","Please allow popups in your browser for this site to be able to view the print view."),5e3)},title:"*",messageTop:"*",messageBottom:"*",exportOptions:{},header:!0,footer:!1,autoPrint:!0,customize:null},y})})(M);
