import{r as d}from"./jquery-2e737b56.js";import{r as l}from"./dataTables.bootstrap5-167a6273.js";import{r as u}from"./dataTables.buttons-e737a76f.js";import"./_commonjsHelpers-de833af9.js";import"./dataTables.bootstrap5-0e266819.js";import"./jquery-eac64496.js";import"./jquery.dataTables-738ef3ac.js";import"./jquery.dataTables-6ae8652d.js";var p={exports:{}};/*! Bootstrap integration for DataTables' Buttons
 * © SpryMedia Ltd - datatables.net/license
 */(function(r,c){(function(n){var e,a;e=d(),a=function(o,t){t.fn.dataTable||l(o,t),t.fn.dataTable.Buttons||u(o,t)},typeof window>"u"?r.exports=function(o,t){return o=o||window,t=t||e(o),a(o,t),n(t,0,o.document)}:(a(window,e),r.exports=n(e,window,window.document))})(function(n,e,a,o){var t=n.fn.dataTable;return n.extend(!0,t.Buttons.defaults,{dom:{container:{className:"dt-buttons btn-group flex-wrap"},button:{className:"btn btn-secondary",active:"active"},collection:{action:{dropHtml:""},container:{tag:"div",className:"dropdown-menu dt-button-collection"},closeButton:!1,button:{tag:"a",className:"dt-button dropdown-item",active:"dt-button-active",disabled:"disabled",spacer:{className:"dropdown-divider",tag:"hr"}}},split:{action:{tag:"a",className:"btn btn-secondary dt-button-split-drop-button",closeButton:!1},dropdown:{tag:"button",dropHtml:"",className:"btn btn-secondary dt-button-split-drop dropdown-toggle dropdown-toggle-split",closeButton:!1,align:"split-left",splitAlignClass:"dt-button-split-left"},wrapper:{tag:"div",className:"dt-button-split btn-group",closeButton:!1}}},buttonCreated:function(i,s){return i.buttons?n('<div class="btn-group"/>').append(s):s}}),t.ext.buttons.collection.className+=" dropdown-toggle",t.ext.buttons.collection.rightAlignClassName="dropdown-menu-right",t})})(p);
