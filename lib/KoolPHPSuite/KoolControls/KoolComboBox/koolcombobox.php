<?php $_dl0="\061.\070\0560.0"; if (!class_exists("\113\157olScri\160\164ing",FALSE)) { class koolscripting { static function start() { ob_start(); return ""; } static function end() { $_dO0=ob_get_clean(); $_dl1=""; $_dO1=new domdocument(); $_dO1->loadxml($_dO0); $_dl2=$_dO1->documentElement; $id=$_dl2->getattribute("id"); $name=$_dl2->nodeName; $id=($id == "") ? "\144ump": $id; if (class_exists($name,FALSE)) { eval ("\044".$id."\040\075 new ".$name."('".$id."\047\051;"); $$id->loadxml($_dl2); $_dl1=$$id->render(); } else { $_dl1.=$_dO0; } return $_dl1; } } } function _dO2($_dl3,$_dO3,$_dl4) { return str_replace($_dl3,$_dO3,$_dl4); } function _dO4() { $_dl5=_dO2("\134","\057",strtolower($_SERVER["\123\103RIPT_NA\115\105"])); $_dl5=_dO2(strrchr($_dl5,"\057"),"",$_dl5); $_dO5=_dO2("\134","/",realpath(".")); $_dl6=_dO2($_dl5,"",strtolower($_dO5)); return $_dl6; } function _dO6($_dl7) { return md5($_dl7); } class _di10 { static $_di10="\1730}<div\040\151d='\173\151\144}' \143\154ass='\173\163tyle\175\113CB'\040\163ty\154e=\047z-i\156\144ex\072\0640\060\060;w\151dth\072\173wi\144\164h};\047\076<\144\151v>\173\143omb\157\175\173b\157\170}</\144\151v>\173\061}<\144\151v i\144\075'\173\151d}\137\151te\155\164em\160\154at\145\047 \163\164yle\075\047d\151\163pla\171\072no\156e'>\173\151te\155\164em\160\154at\145\175</\144\151v>\074/d\151\166>\173\062}"; } function _dO7() { header("\103ont\145\156\164-typ\145\072 tex\164\057java\163\143ript"); } function _dl8() { echo "\166\141r _diO\061\0750;"; } function _dO8() { return exit (); } function _dl9() { return _di10::$_di10; } function _dO9( &$_dla) { for ($_dOa=0; $_dOa<3; $_dOa ++) $_dla=_dO2("\173".$_dOa."\175","",$_dla); return TRUE; } if ( isset ($_GET[_dO6("js")])) { _dO7(); ?> function _dO(_do){return (_do!=null);}if (!_dO(_dY)){var _dY=0; }function _dy(){_dY++; return _dY; }function _dI(_di){return document.getElementById(_di); }function _dA(_da,_dE){var _de=document.createElement(_da); _dE.appendChild(_de); return _de; }function _dU(_do,_du){if (!_dO(_du))_du=1; for (var i=0; i<_du; i++)_do=_do.firstChild; return _do; }function _dZ(_do,_du){if (!_dO(_du))_du=1; for (var i=0; i<_du; i++)_do=_do.nextSibling; return _do; }function _dz(_do,_du){if (!_dO(_du))_du=1; for (var i=0; i<_du; i++)_do=_do.parentNode; return _do; }function _dX(_do,_dx){_do.style.height=_dx+"px"; }function _dW(_do,_dx){_do.style.width=_dx+"px"; }function _dw(_dV,_dv,_dT){_dT=_dO(_dT)?_dT:document.body; var _dt=_dT.getElementsByTagName(_dV); var _dS=new Array(); for (var i=0; i<_dt.length; i++)if (_dt[i].className.indexOf(_dv)>=0){_dS.push(_dt[i]); }return _dS; }function _ds(){return (typeof(_diO1)=="undefined");}function _dR(_do,_dx){_do.style.display=(_dx)?"block": "none"; }function _dr(_do){return (_do.style.display!="none"); }function _dQ(_do){return _do.className; }function _dq(_do,_dx){_do.className=_dx; }function _dP(_dp,_dN,_dn){_dq(_dn,_dQ(_dn).replace(_dp,_dN)); }function _dM(_do,_dv){if (_do.className.indexOf(_dv)<0){var _dm=_do.className.split(" "); _dm.push(_dv); _do.className=_dm.join(" "); }}function _dL(_do,_dv){if (_do.className.indexOf(_dv)>-1){_dP(_dv,"",_do);var _dm=_do.className.split(" "); _do.className=_dm.join(" "); }}function _dl(_dK,_dk,_dJ,_dj){if (_dK.addEventListener){_dK.addEventListener(_dk,_dJ,_dj); return true; }else if (_dK.attachEvent){if (_dj){return false; }else {var _dH= function (){_dJ.apply(_dK,[window.event]); };if (!_dK["ref"+_dk])_dK["ref"+_dk]=[]; else {for (var _dh in _dK["ref"+_dk]){if (_dK["ref"+_dk][_dh]._dJ === _dJ)return false; }}var _dG=_dK.attachEvent("on"+_dk,_dH); if (_dG)_dK["ref"+_dk].push( {_dJ:_dJ,_dH:_dH } ); return _dG; }}else {return false; }} ; function _dg(_dF){var a=_dF.attributes,i,_df,_dD; if (a){_df=a.length; for (i=0; i<_df; i+=1){_dD=a[i].name; if (typeof _dF[_dD] === "function"){_dF[_dD]=null; }}}a=_dF.childNodes; if (a){_df=a.length; for (i=0; i<_df; i+=1){_dg(_dF.childNodes[i]); }}}function _dd(_dn){var _dC=""; for (var _dc in _dn){switch (typeof(_dn[_dc])){case "string":if (_dO(_dn.length))_dC+="'"+_dn[_dc]+"',"; else _dC+="'"+_dc+"':'"+_dn[_dc]+"',"; break; case "number":if (_dO(_dn.length))_dC+=_dn[_dc]+","; else _dC+="'"+_dc+"':"+_dn[_dc]+","; break; case "object":if (_dO(_dn.length))_dC+=_dd(_dn[_dc])+","; else _dC+="'"+_dc+"':"+_dd(_dn[_dc])+","; break; }}if (_dC.length>0)_dC=_dC.substring(0,_dC.length-1); _dC=(_dO(_dn.length))?"["+_dC+"]": "{"+_dC+"}"; if (_dC=="{}")_dC="null"; return _dC; }function _dB(_db){var _do0=navigator.appVersion.match(/MSIE/); var _dO0=navigator.userAgent; var _dl0=_dO0.match(/firefox/i); var _di0=_dl0 && (_dO0.match(/firefox\/2./i) || _dO0.match(/firefox\/1./i)); var _dI0=_dl0 && !_di0; var _do1=new Object(); _do1.x=0; _do1.y=0; if (_db !== null){_do1.x=_db.offsetLeft; _do1.y=_db.offsetTop; var offsetParent=_db.offsetParent; var parentNode=_db.parentNode; var borderWidth=null; while (offsetParent!=null){_do1.x+=offsetParent.offsetLeft; _do1.y+=offsetParent.offsetTop; var _dO1=offsetParent.tagName.toLowerCase(); if ((_do0 && _dO1!="table") || (_dI0 && _dO1=="td")){borderWidth=_dl1(offsetParent); _do1.x+=borderWidth.left; _do1.y+=borderWidth.top; }if (offsetParent!=document.body && offsetParent!=document.documentElement){_do1.x-=offsetParent.scrollLeft; _do1.y-=offsetParent.scrollTop; }if (!_do0){while (offsetParent!=parentNode && parentNode !== null){_do1.x-=parentNode.scrollLeft; _do1.y-=parentNode.scrollTop; if (_di0){borderWidth=_dl1(parentNode); _do1.x+=borderWidth.left; _do1.y+=borderWidth.top; }parentNode=parentNode.parentNode; }}parentNode=offsetParent.parentNode; offsetParent=offsetParent.offsetParent; }}return _do1; }function _di1(_dn){return _dB(_dn).x; var _dI1=0; if (_dn.offsetParent)while (1){_dI1+=_dn.offsetLeft; if (!_dn.offsetParent)break; _dn=_dn.offsetParent; }else if (_dn.x)_dI1+=_dn.x; return _dI1; }function _do2(_dn){return _dB(_dn).y; var _dO2=0; if (_dn.offsetParent)while (1){_dO2+=_dn.offsetTop; if (!_dn.offsetParent)break; _dn=_dn.offsetParent; }else if (_dn.y)_dO2+=_dn.y; return _dO2; }function _dl2(_dp,_di2){return _di2.indexOf(_dp); }function _dI2(_do3){if (_do3.preventDefault)_do3.preventDefault(); else event.returnValue= false; return false; }function KoolComboboxItem(_di){ this._di=_di; this.id=_di; }KoolComboboxItem.prototype= {_dO3:function (){return eval(this._di.substring(0,_dl2(".",this._di))); } ,getData:function (){var _dl3=eval("__="+_dU(_dI(this._di)).value); for (var i in _dl3){if (typeof _dl3[i]!="function"){try {_dl3[i]=decodeURIComponent(_dl3[i]); }catch (_di3){_dl3[i]=unescape(_dl3[i]); }}}return _dl3; } ,enable:function (_dI3){var _do4=_dI(this._di); if (_ds())return; (_dI3)?_dL(_do4,"kcbDisable"):_dM(_do4,"kcbDisable"); } ,isEnabled:function (){return _dl2("kcbDisable",_dQ(_dI(this._di)))<0; } ,isSelected:function (){return _dl2("kcbSelected",_dQ(_dI(this._di)))>-1; } ,setVisible:function (_dO4){if (_ds())return; _dR(_dI(this._di),_dO4); } ,select:function (){var _dl4=this._dO3(); if (_ds())return; if (!_dl4._di4("OnBeforeSelect", { "Item": this } ))return; var _do4=_dI(this._di); _dl4._dI4(); _dM(_do4,"kcbSelected"); var _do5=_dI(_dl4._di+"_selectedText"); var _dO5=_dI(_dl4._di+"_selectedValue"); var _dl5=this.getData(); _do5.value=_dl5["text"]; _dO5.value=_dl5["value"]; _dl4._di4("OnSelect", { "Item": this } ); } ,unselect:function (){var _dl4=this._dO3(); if (!_dl4._di4("OnBeforeUnselect", { "Item": this } ))return; var _do4=_dI(this._di); _dl4._dI4(); _dL(_do4,"kcbSelected"); var _do5=_dI(_dl4._di+"_selectedText"); var _dO5=_dI(_dl4._di+"_selectedValue"); _do5.value=""; _dO5.value=""; _dl4._di4("OnUnselect", { "Item": this } ); } ,_di5:function (_do3){if (this.isEnabled()){ this.select(); var _dl4=this._dO3(); var _dI5=_dl4._do6; _dl4.close(); _dl4._do6=_dI5; }else {var _do5=_dI(this._dO3()._di+"_selectedText"); _do5.focus(); }} ,_dO6:function (_do3){ this._dO3()._dl6(); if (this.isEnabled()){var _do4=_dI(this._di); _dM(_do4,"kcbSelectFocus"); }} ,_di6:function (_do3){var _do4=_dI(this._di); _dL(_do4,"kcbSelectFocus"); }};function KoolCombobox(_di,_dI6,_do7,_dO7,_dl7,_di7,_do6,_dI7,_do8,_dO8){ this._di=_di; this.id=_di; this._dI6=_dI6; this._do7=(_do7=="auto")?-1:parseInt(_do7); this._dO7=(_dO7=="auto")?-1:parseInt(_dO7); this._dl7=(_dl7=="auto")?-1:parseInt(_dl7); this._di7=(_di7=="auto")?-1:parseInt(_di7); this._do6=_do6; this._dI7=_dI7; this._do8=_do8; this._dO8=(_dO8!="")?_dO8:null; this._dl8=new Array(); this._di8(); }KoolCombobox.prototype= {_di8:function (){var _dI8=_dI(this._di); var _do9=_dU(_dI8,2); var _dO9=_dZ(_do9); _dl(_do9,"mouseover",_dl9, false); _dl(_do9,"mouseout",_di9, false); _dl(_do9,"mousedown",_dI9, false); _dl(_do9,"mouseup",_doa, false); _dl(_do9,"click",_dOa, false); _dl(document,"mousedown",eval("___=function(){if ("+this._di+".isOpening())"+this._di+".close()}"), false); _dl(_dO9,"mousedown",_dla, false); this._dia(1); var _do5=_dI(this._di+"_selectedText"); _dl(_do5,"keydown",_dIa, false); _dl(_do5,"focus",_dob, false); var _dOb=navigator.userAgent.toLowerCase(); var _dlb=((_dl2("msie",_dOb)!=-1) && (_dl2("opera",_dOb)==-1)); if (_dlb){var _dib=_do5.value; _do5.value=""; if (_do5.offsetWidth>0){_dW(_do5,_do5.offsetWidth); }_do5.value=_dib; }var _dIb=_dw("div","kcbItemBox",_dI(this._di))[0]; var _doc=_dw("li","kcbItem",_dIb); var _do5=_dI(this._di+"_selectedText"); var _dO5=_dI(this._di+"_selectedValue"); _do5.value=""; _dO5.value=""; for (var i=0; i<_doc.length; i++){_doc[i].id=this._di+".i"+_dy(); if (_dl2("Selected",_dQ(_doc[i]))>0){_dl5=(new KoolComboboxItem(_doc[i].id)).getData(); _do5.value=_dl5["text"]; _dO5.value=_dl5["value"]; }}} ,_dia:function (_dOc){var _dIb=_dw("div","kcbItemBox",_dI(this._di))[0]; var _doc=_dw("li","kcbItem",_dIb); var _dlc=(_dOc)?_dl:_dic; for (var i=0; i<_doc.length; i++){_dlc(_doc[i],"click",_dIc, false); _dlc(_doc[i],"mouseover",_dod, false); _dlc(_doc[i],"mouseout",_dOd, false); }} ,_dI4:function (){var _dIb=_dw("div","kcbItemBox",_dI(this._di))[0]; var _doc=_dw("li","kcbItem",_dIb); for (var i=0; i<_doc.length; i++){_dL(_doc[i],"kcbSelected"); }} ,getItemIds:function (){var _dIb=_dw("div","kcbItemBox",_dI(this._di))[0]; var _doc=_dw("li","kcbItem",_dIb); var _dld=new Array(); if (_ds())return _dld; for (var i=0; i<_doc.length; i++){_dld.push(_doc[i].id); }return _dld; } ,getItem:function (_did){return new KoolComboboxItem(_did); } ,getText:function (){return _dI(this._di+"_selectedText").value; } ,getValue:function (){return _dI(this._di+"_selectedValue").value; } ,open:function (){if (!this._di4("OnBeforeOpen", {} ))return; var _dId=_dU(_dI(this._di)); var _dl4=_dU(_dId); var _doe=_dZ(_dU(_dId)); var _dOe=_dZ(_doe); var _dle=(this._do7>0)?this._do7:_dl4.offsetWidth; _dW(_doe,_dle); var _die=_dw("div","kcbItemBox",_dId)[0]; _die.style.height="auto"; _dM(_dId,"kcbOpen"); _dId.style.position="relative"; if (this._dO7>0){_dX(_die,this._dO7); }else {if (_die.offsetHeight<this._dl7 && this._dl7>0){_dX(_die,this._dl7); }else if (_die.offsetHeight>this._di7 && this._di7>0){_dX(_die,this._di7); }}_die.scrollTop=0; var _dIe=_dl4.offsetTop; var _dof=_dl4.offsetLeft; switch (this._dI7){case "up":_doe.style.top=_dIe-_doe.offsetHeight+"px"; break; case "auto":case "down":default:_doe.style.top=_dIe+_dl4.offsetHeight+"px"; break; }_doe.style.left=((this._do8=="right")?_dof+_dl4.offsetWidth-_dle:_dof)+"px"; if (_dO(_dOe)){_dW(_dOe,_doe.offsetWidth); _dX(_dOe,_doe.offsetHeight); _dOe.style.top=_doe.style.top; _dOe.style.left=_doe.style.left; }_do5=_dI(this._di+"_selectedText"); _do5.focus(); _do5.select(); this._di4("OnOpen", {} ); } ,isOpening:function (){var _dId=_dU(_dI(this._di)); return _dl2("Open",_dQ(_dId))>0; } ,close:function (){if (!this._di4("OnBeforeClose", {} ))return; var _dId=_dU(_dI(this._di)); _dL(_dId,"kcbOpen"); _dId.style.position="static"; this._dl6(); var _do5=_dI(this._di+"_selectedText"); var _dib=_do5.value; if (this._do6){for (var i=0; i<=_dib.length; i++){var _dOf=_dib.substr(0,_dib.length-i); var _dIf=this._dog(_dOf,"text",1, false); if (_dIf.length>0){break; }}if (_dIf.length>0){var _dOg=new KoolComboboxItem(_dIf[0]); if (i>0){_dOg.select(); }else {if (_dOg.getData()["text"]!=_dib){_dOg.select(); }}}else {_do5.value=""; }} this._di4("OnClose", {} ); } ,removeItem:function (_di){var _do4=_dI(_di); if (_ds())return; if (_dO(_do4) && _dl2("Item",_dQ(_do4))>0 && _dl2(this._di,_di)==0){var _dlg=_dz(_do4); _dg(_do4); _dlg.removeChild(_do4); }} ,addItem:function (_dib,_dig,_dIg){var _dl3=new Object(); _dl3["text"]=_dib; _dl3["value"]=_dig; for (var i in _dIg){if (typeof _dIg[i]!="function"){_dl3[i]=_dIg[i]; }}if (_ds())return; var _die=_dw("div","kcbItemBox",_dI(this._di))[0]; var _dlg=_dU(_die); var _do4=_dA("li",_dlg); _do4.id=this._di+".i"+_dy(); _dq(_do4,"kcbLI kcbItem"); var _doh=_dI(this._di+"_itemtemplate").innerHTML; var _dOh=unescape(_doh); for (var _dlh in _dl3){if (typeof _dl3[_dlh]!="function"){_dOh=_dOh.replace(eval("/{"+_dlh+"}/g"),_dl3[_dlh]); _dl3[_dlh]=encodeURIComponent(_dl3[_dlh]); }}_do4.innerHTML="\x3cinput type=\'hidden\' value=\""+_dd(_dl3)+"\"/>\x3ca class=\'kcbA\' href=\'javascript:void 0\'>\x3cdiv class=\'kcbIn\'>"+_dOh+"</div></a>"; _dl(_do4,"click",_dIc, false); _dl(_do4,"mouseover",_dod, false); _dl(_do4,"mouseout",_dOd, false); return (new KoolComboboxItem(_do4.id)); } ,sort:function (_dih,_dIh){} ,registerEvent:function (_dc,_doi){if (_ds())return; this._dl8[_dc]=_doi; } ,_di4:function (_dc,_dOi){if (_ds())return true; return (_dO(this._dl8[_dc]))?this._dl8[_dc](this,_dOi): true; } ,_dli:function (_do3){} ,_di5:function (_do3){ this.open(); } ,_dii:function (_dIi){var _doj=-1; var _doc=_dw("li","kcbItem",_dI(this._di)); for (var i=0; i<_doc.length; i++){if (_dl2("kcbSelectFocus",_dQ(_doc[i]))>-1){_doj=i; break; }}if (_doj<0 && _dIi<0){_doj=_doc.length; }var _dOj=0,_dlj=Math.abs(_dIi); var _dij=_dIi/_dlj; var _dIj=_doj+_dij; while (_dIj>-1 && _dIj<_doc.length && _dOj<_dlj){if (_dl2("Disable",_dQ(_doc[_dIj]))<0 && _dr(_doc[_dIj])){_dOj++; }_dIj+=_dij; }if (_dOj==_dlj){if (_doj>-1 && _doj<_doc.length){_dL(_doc[_doj],"kcbSelectFocus"); }_doj=_dIj-_dij; _dM(_doc[_doj],"kcbSelectFocus"); var _dok=_doc[_doj]; (new KoolComboboxItem(_dok.id)).select(); var _die=_dz(_dok,2); if (_dok.offsetTop+_dok.offsetHeight>_die.scrollTop+_die.offsetHeight){_die.scrollTop=_dok.offsetTop; }else if (_dok.offsetTop<_die.scrollTop && _die.scrollTop>0){_die.scrollTop=_dok.offsetTop+_dok.offsetHeight-_die.offsetHeight; }var _do5=_dI(this._di+"_selectedText"); _do5.select(); }} ,_dl6:function (){var _doc=_dw("li","kcbItem",_dI(this._di)); for (var i=0; i<_doc.length; i++)if (_dl2("kcbSelectFocus",_dQ(_doc[i])))_dL(_doc[i],"kcbSelectFocus"); } ,_dOk:function (){if (this.isOpening())this._dii(-1); else this.open(); } ,_dlk:function (){if (this.isOpening())this._dii(1); else this.open(); } ,_dik:function (){var _doj=-1; var _doc=_dw("li","kcbItem",_dI(this._di)); for (var i=0; i<_doc.length; i++){if (_dl2("kcbSelectFocus",_dQ(_doc[i]))>-1){_doj=i; break; }}if (_doj>-1 && _doj<_doc.length){_dL(_doc[i],"kcbSelectFocus"); (new KoolComboboxItem(_doc[i].id)).select(); } this.close(); } ,_dIk:function (){ this.close(); } ,_dog:function (_dOf,_dol,_dih,_dll){var _dl5=new Array(); var _dIf=new Array(); var _doc=_dw("li","kcbItem",_dI(this._di)); for (var i=0; i<_doc.length; i++){var _dOg=new KoolComboboxItem(_doc[i].id); _dIf.push(_dOg._di); _dl5.push((_dll)?_dOg.getData()[_dol]:_dOg.getData()[_dol].toLowerCase()); }if (!_dll)_dOf=_dOf.toLowerCase(); var _dS=new Array(); switch (_dih){case 0:break; case 1:for (var i=0; i<_dIf.length; i++)if (_dl2(_dOf,_dl5[i])==0)_dS.push(_dIf[i]); break; case 2:for (var i=0; i<_dIf.length; i++)if (_dl2(_dOf,_dl5[i])>-1)_dS.push(_dIf[i]); break; }return _dS; } ,HT:function (){var _do5=_dI(this._di+"_selectedText"); var _dib=_do5.value; if (!_dO(this._dO8)){if (this._do6){for (var i=0; i<=_dib.length; i++){var _dOf=_dib.substr(0,_dib.length-i); var _dIf=this._dog(_dOf,"text",1, false); if (_dIf.length>0){break; }}if (_dIf.length>0){ this._dI4(); (new KoolComboboxItem(_dIf[0])).select(); _do5.selectionStart=_dOf.length; _do5.selectionEnd=_do5.value.length; }}}else {if (!this._di4("OnBeforeSendUpdateRequest", { "Text":_dib } ))return; koolajax.callback(eval(this._dO8)(_dib),eval("__=function (_r){"+this._di+".SFR(_r)}")); var _die=_dw("div","kcbItemBox",_dI(this._di))[0]; var _dlg=_dU(_die); _dg(_dlg); _dlg.innerHTML=""; _dlg.innerHTML="<li id='"+this._di+".loading' class='kcbLI'><div class='kcbLoading'>Loading...</div></li>"; this._di4("OnSendUpdateRequest", { "Text":_dib } ); }} ,SFR:function (_dC){if (!this._di4("OnBeforeUpdateItemList", { "Data":_dC } ))return; var _die=_dw("div","kcbItemBox",_dI(this._di))[0]; var _dlg=_dU(_die); _dlg.innerHTML=""; var _doh=_dI(this._di+"_itemtemplate").innerHTML; var _dil=""; for (i in _dC){if (typeof _dC[i]!="function"){var _dl5=new Object(); _dl5["text"]=""; _dl5["value"]=""; var _dIl=unescape(_doh); for (_dlh in _dC[i]){if (typeof _dC[i][_dlh]!="function"){_dl5[_dlh]=_dC[i][_dlh]; _dIl=_dIl.replace(eval("/{"+_dlh+"}/g"),_dl5[_dlh]); _dl5[_dlh]=encodeURIComponent(_dl5[_dlh]); }}_dil+="<li id='"+this._di+".i"+_dy()+"\' class=\'kcbLI kcbItem\'>\x3cinput type=\'hidden\' value=\""+_dd(_dl5)+"\"/>\x3ca class=\'kcbA\' href=\'javascript:void 0\'>\x3cdiv class=\'kcbIn\'>"+_dIl+"</div></a></li>"; }}_dlg.innerHTML=_dil; this._dia(1); this._di4("OnUpdateItemList", {} ); }};function _dl9(){_dM(this,"kcbOver"); }function _di9(){_dL(this,"kcbOver"); }function _dI9(_do3){var _dI8=_dz(this,2); var _dId=_dU(_dI8); _dM(_dId,"kcbDown"); var _dom=eval(_dI8.id); _dom._dli(_do3); return false; }function _dOa(_do3){var _dI8=_dz(this,2); var _dom=eval(_dI8.id); _dom._di5(_do3); }function _doa(){var _dId=_dz(this ); _dL(_dId,"kcbDown"); }function _dla(_do3){if (_do3.stopPropagation)_do3.stopPropagation(); else _do3.cancelBubble= true; }function _dIc(_do3){ (new KoolComboboxItem(this.id))._di5(_do3); }function _dod(_do3){ (new KoolComboboxItem(this.id))._dO6(_do3); }function _dOd(_do3){ (new KoolComboboxItem(this.id))._di6(_do3); }function _dIa(_do3){var _dl4=eval("__="+this.id.replace("_selectedText","")); var _dlh=_do3.keyCode; if (!_dl4._di4("OnBeforeKeyPress", { "keyCode":_dlh } )){return _dI2(_do3); }switch (_dlh){case 40:_dl4._dlk(); return _dI2(_do3); break; case 38:_dl4._dOk(); return _dI2(_do3); break; case 13:_dl4._dik(); return _dI2(_do3); break; case 27:_dl4._dIk(); return _dI2(_do3); case 39:case 37:case 16:case 17:case 18:case 8:break; case 9:_dl4.close(); _dl4._dl6(); break; default:setTimeout(_dl4._di+".HT()",1); break; }_dl4._di4("OnKeyPress", { "KeyCode":_dlh } ); }function _dob(_do3){ this.select(); }if (typeof(__KCBInits)!="undefined" && _dO(__KCBInits)){for (var i=0; i<__KCBInits.length; i++){__KCBInits[i](); }} <?php _dl8(); _dO8(); } if (!class_exists("KoolCom\142\157box",FALSE)) { function _dlb($_dOb) { return _dO2("\053","\040",urlencode($_dOb)); } function _dlc($_dOc,$_dld) { $_dOd=""; foreach ($_dOc->childNodes as $_dle) { $_dOd.=$_dld->savexml($_dle); } return trim($_dOd); } class koolcomboboxitem { var $enabled=TRUE; var $selected=FALSE; var $data; function __construct() { $this->data =array("text" => "\113oolComb\157\142\157x It\145\155","value" => ""); } } class koolcombobox { var $_dl0="\061.8.0.\060"; var $id; var $styleFolder; var $_dOe; var $scriptFolder=""; var $openDirection="dow\156"; var $superAbove=TRUE; var $effect="n\157\156e"; var $width="aut\157"; var $boxWidth="auto"; var $boxHeight="aut\157"; var $maxBoxHeight="\06200px"; var $minBoxHeight="5\060px"; var $mode="combob\157\170"; var $align="\154\145ft"; var $headerTemplate=""; var $itemTemplate="\173\164\145\170t}"; var $footerTemplate=""; var $inputValidate=TRUE; var $serviceFunction; var $_dlf; function __construct($_dOf) { $this->id =$_dOf; $this->_dlf =array(); } function additem($_dl7="",$_dlg="",$_dOg=array(),$_dlh=FALSE,$_dOh=TRUE) { $_dOi=new koolcomboboxitem(); $_dOi->enabled =( isset ($_dOh)) ? $_dOh: FALSE; $_dOi->selected =( isset ($_dlh)) ? $_dlh: FALSE; if ($_dl7 != "") $_dOi->data["\164ext"]=$_dl7; $_dOi->data["va\154\165\145"]=$_dlg; if ( isset ($_dOg)) { foreach ($_dOg as $_dlj => $_dOj) { $_dOi->data[$_dlj]=$_dOj; } } array_push($this->_dlf ,$_dOi); return $_dOi; } function loadxml($_dlk) { if (gettype($_dlk) == "\163tring") { $_dOk=new domdocument(); $_dOk->loadxml($_dlk); $_dlk=$_dOk->documentElement; } $_dOf=$_dlk->getattribute("id"); if ($_dOf != "") $this->id =$_dOf; $_dll=$_dlk->getattribute("st\171\154eFolde\162"); if ($_dll != "") $this->styleFolder =$_dll; $_dlm=$_dlk->getattribute("\163cript\106\157lder"); if ($_dlm != "") $this->scriptFolder =$_dlm; $_dOm=$_dlk->getattribute("boxH\145\151ght"); if ($_dOm != "") $this->boxHeight =$_dOm; $_dln=$_dlk->getattribute("maxBo\170\110eight"); if ($_dln != "") $this->maxBoxHeight =$_dln; $_dOn=$_dlk->getattribute("\155\151nBoxHeig\150\164"); if ($_dOn != "") $this->minBoxHeight =$_dOn; $_dlo=$_dlk->getattribute("ope\156\104\151recti\157\156"); if ($_dlo != "") $this->openDirection =$_dlo; $_dOo=$_dlk->getattribute("e\146\146\145ct"); if ($_dOo != "") $this->effect =$_dOo; $_dlp=$_dlk->getattribute("\167idth"); if ($_dlp != "") $this->width =$_dlp; $_dOp=$_dlk->getattribute("\142oxWid\164\150"); if ($_dOp != "") $this->boxWidth =$_dOp; $_dlq=$_dlk->getattribute("\163erviceFu\156\143tion"); if ($_dlq != "") $this->serviceFunction =$_dlq; $_dOq=$_dlk->getattribute("\141lign"); if ($_dOq != "") $this->align =$_dOq; $_dlr=$_dlk->getattribute("\155ode"); if ($_dlr != "") $this->mode =$_dlr; $_dls=strtolower($_dlk->getattribute("\151np\165\164Val\151\144at\145")); if ($_dls != "") $this->inputValidate =($_dls == "tr\165e") ? TRUE: FALSE; $_dOs=strtolower($_dlk->getattribute("sup\145\162\101bove")); if ($_dOs != "") $this->superAbove =($_dOs == "\164\162ue") ? TRUE: FALSE; foreach ($_dlk->childNodes as $_dlt) { switch (strtolower($_dlt->nodeName)) { case "\151\164\145ms": foreach ($_dlt->childNodes as $_dOt) { if (strtolower($_dOt->nodeName) == "\151tem") { $_dOh=$_dOt->getattribute("\145\156abled"); $_dOh=($_dOh != "") ? $_dOh: "\164rue"; $_dlh=$_dOt->getattribute("\163\145lect\145\144"); $_dlh=($_dlh != "") ? $_dlh: "false"; $_dOg=array("t\145\170t" => "","va\154\165e" => ""); foreach ($_dOt->attributes as $_dlu) { if ($_dlu->name != "\145\156abl\145\144" && $_dlu->name != "\163elect\145\144") { $_dOg[$_dlu->name ]=$_dlu->value; } } $this->additem($_dOg["text"],$_dOg["\166alue"],$_dOg,($_dlh == "true") ? TRUE: FALSE,($_dOh == "\164\162ue") ? TRUE: FALSE); } } break; case "\164\145mplat\145\163": foreach ($_dlt->childNodes as $_dOu) { switch (strtolower($_dOu->nodeName)) { case "\150eade\162\164\145mpl\141\164e": $this->headerTemplate =_dlc($_dOu,$_dlk->parentNode); break; case "item\164\145\155pla\164\145": $this->itemTemplate =_dlc($_dOu,$_dlk->parentNode); break; case "footer\164\145mplate": $this->footerTemplate =_dlc($_dOu,$_dlk->parentNode); break; } } break; } } } function _dlv() { $this->styleFolder =_dO2("\134","\057",$this->styleFolder); $_dll=trim($this->styleFolder ,"\057"); $_dOv=strrpos($_dll,"/"); $this->_dOe =substr($_dll,($_dOv ? $_dOv: -1)+1); } function render() { $_dlw="\n\074!--Ko\157\154Combo\142\157x ver\163\151on ".$this->_dl0." -\040\167ww.koo\154\160hp.net\040-->\n"; $_dlw.=$this->registercss(); $_dlw.=$this->rendercombobox(); $_dOw= isset ($_POST["__k\157\157lajax"]) || isset ($_GET["__koolaj\141\170"]); $_dlw.=($_dOw) ? "": $this->registerscript(); $_dlw.="\074s\143\162ipt\040type\075\047t\145\170t/j\141\166as\143\162ip\164\047>"; $_dlw.=$this->startupscript(); $_dlw.="\074/\163\143rip\164\076"; return $_dlw; } function rendercombobox() { $this->_dlv(); $tpl_bound="\173\142ound\143\157nt\145\156t}"; $tpl_box="\173boxco\156\164ent}"; $tpl_item="\173\151temco\156ten\164\175"; include "\163\164yl\145\163"."/".$this->_dOe."\057".$this->_dOe."\056tpl"; $_dlx="\074div c\154\141ss\075'kcb\173\155o\144e}'\076\173t\160\154_b\157\165n\144\175</\144\151v>"; $_dOx="\074ta\142\154e><\164\162><\164d st\171le=\047\167i\144\164h\072100\045;'\076\173i\156\160ut\175\074/\164\144><\164d>\173\141rro\167}</\164\144><\057tr>\074/tab\154e>"; $_dly="\074inp\165\164 i\144\075'\173\151d}\137\163el\145\143t\145\144T\145xt'\040nam\145='\173\151d}_s\145\154ec\164\145d\124\145xt\047 typ\145='te\170t' c\154\141s\163\075'k\143\142I\156\160ut\040node\143or' \141utoc\157mple\164e='\157\146f'\040/><\151\156pu\164 ty\160\145=\047hid\144\145n'\040id=\047\173i\144\175_s\145\154ec\164\145dVal\165\145' n\141\155e=\047\173id\175\137s\145\154ec\164\145dV\141lue\047 />"; $_dOy="<\151\155g i\144\075'\173\151d}_\141\162ro\167\047 s\162\143='\173\163t\171\154ef\157\154de\162\175/no\156\145.g\151\146' c\154\141ss\075'kcb\101rrow\047\040a\154\164=''\040\057>"; $_dlz="<d\151\166 cla\163\163='k\143\142B\157\170'>\173\164pl\137\142ox\175\074/\144iv>\173\142ox\137\151fr\141\155e}"; $_dOz="\074ifram\145\040cl\141\163s=\047\153cb\111fram\145\047 s\162\143='\152ava\163\143ri\160\164:f\141\154se\073\047> \074\057i\146\162am\145\076"; $_dl10="\173head\145\162}\173\151tem\175\173fo\157\164er\175"; $_dO10="\074di\166\040cl\141\163s='\153\143bHe\141\144er\047>\173\150\145a\144\145r\143ont\145\156t}\040\074/\144\151v>"; $_dl11="\074div \143\154as\163\075'kc\142\106oo\164\145r\047\076\173\146oo\164\145r\143\157nt\145\156t\175\040</\144\151v>"; $_dO11="<d\151\166 cla\163\163='\153\143bI\164\145mB\157\170'\040\163t\171\154e\075\047h\145\151gh\164\072\173\142oxHe\151\147ht\175\047>\173\151t\145\155sc\157\156te\156\164}</\144iv>"; $_dl12="<u\154\040cla\163\163='\153\143bU\114\047>\173\151tem\163\175<\057\165l\076"; $_dO12="\074\154i c\154\141ss=\047\153cb\114\111 k\143\142I\164\145m \173dis\141bl\145\175 \173\163elec\164\145d\175\047>\173\151\164em_\144\141ta\175<a h\162\145f\075\047\152\141v\141\163c\162ipt:\166\157id\0400' c\154\141ss\075\047k\143bA'\076\074sp\141n cl\141ss=\047kcb\111\156'\076\173tp\154_it\145\155}\074/sp\141n\076</a\076\074/l\151>"; $_dl13="\074in\160\165t t\171\160e=\047hi\144\144e\156\047\040va\154ue\075\042\173d\141ta}\042 />"; $_dO13=_dO2("\173tpl_bo\170\175",$tpl_box,$_dlz); $_dO13=_dO2("\173\142ox_i\146\162am\145\175",($this->superAbove) ? $_dOz: "",$_dO13); $_dO13=_dO2("\173\142oxc\157\156tent\175",$_dl10,$_dO13); $_dl14=""; if ($this->headerTemplate != "") { $_dl14=_dO2("\173hea\144\145rco\156\164ent\175",$this->headerTemplate ,$_dO10); } $_dO13=_dO2("\173header}",$_dl14,$_dO13); $_dO14=""; if ($this->footerTemplate != "") { $_dO14=_dO2("\173\146ooterc\157\156tent}",$this->footerTemplate ,$_dl11); } $_dO13=_dO2("\173\146\157oter}",$_dO14,$_dO13); $_dlf=""; foreach ($this->_dlf as $_dOi) { $_dl15=$this->itemTemplate; foreach ($_dOi->data as $_dO15 => $_dlg) { $_dl15=_dO2("\173".$_dO15."}",$_dlg,$_dl15); } $_dl16=_dO2("\173tpl_i\164\145m}",$tpl_item,$_dO12); $_dl16=_dO2("\173item\143\157nten\164\175",$_dl15,$_dl16); $_dl16=_dO2("\173\144isabl\145\175",($_dOi->enabled) ? "": "\153cb\104\151sa\142\154e",$_dl16); $_dl16=_dO2("\173\163\145lect\145\144}",($_dOi->selected) ? "\153cbSe\154\145cte\144": "",$_dl16); $_dO16=""; foreach ($_dOi->data as $_dO15 => $_dlg) { $_dO16.=",'".$_dO15."\047:'"._dlb($_dlg)."\047"; } $_dO16="\173".substr($_dO16,1)."\175"; $_dl17=_dO2("\173da\164\141}",$_dO16,$_dl13); $_dl16=_dO2("\173it\145m_d\141\164a}",$_dl17,$_dl16); $_dlf.=$_dl16; } $_dO17=_dO2("\173it\145\155s}",$_dlf,$_dl12); $_dl18=_dO2("\173ite\155\163con\164\145nt}",$_dO17,$_dO11); $_dl18=_dO2("\173boxH\145\151gh\164\175",$this->boxHeight ,$_dl18); $_dO13=_dO2("\173ite\155\175",$_dl18,$_dO13); $_dO18=_dO2("\173\151d}",$this->id ,$_dly); $_dl19=_dO2("\173id}",$this->id ,$_dOy); $_dl19=_dO2("\173\163tylefo\154\144er}",$this->_dO19()."/".$this->_dOe ,$_dl19); $_dl1a=_dO2("\173\151d}",$this->id ,$_dlx); $_dl1a=_dO2("\173\164pl_bou\156\144}",$tpl_bound,$_dl1a); $_dl1a=_dO2("\173boundc\157\156\164ent\175",$_dOx,$_dl1a); $_dl1a=_dO2("\173input}",$_dO18,$_dl1a); $_dl1a=_dO2("\173arrow\175",($this->mode == "\143ombobox") ? $_dl19: "",$_dl1a); $_dl1a=_dO2("\173mode\175",($this->mode == "combo\142\157\170") ? "Co\155\142obox": "\124extbo\170",$_dl1a); $_dla=_dO2("\173\151d}",$this->id ,_dl9()); $_dla=_dO2("\173s\164\171\154e}",$this->_dOe ,$_dla); $_dla=_dO2("\173\167idth}",$this->width ,$_dla); $_dla=_dO2("\173i\164\145mte\155\160la\164\145}",$tpl_item,$_dla); $_dla=_dO2("\173\151temc\157\156te\156\164}",$this->itemTemplate ,$_dla); if (_dO9($_dla)) { $_dla=_dO2("\173combo}",$_dl1a,$_dla); } $_dla=_dO2("\173\166\145rsion\175",$this->_dl0 ,$_dla); $_dla=_dO2("\173box}",$_dO13,$_dla); return $_dla; } function registercss() { $this->_dlv(); $_dO1a="\074script t\171\160e='tex\164\057jav\141\163cript\047\076if \050\144oc\165\155ent.g\145\164Eleme\156\164\102yId\050\047__\173\163\164yle}\113\103B')==\156\165ll)\173\166\141r _h\145\141d = d\157\143\165men\164\056getE\154\145\155ent\163\102yTagN\141\155e('h\145\141d')[\060\135;var\040\137link \075\040docu\155\145nt.c\162\145ateEl\145\155ent('\154\151nk')\073\040_lin\153\056id =\040\047__\173\163\164yle}\113\103B';_\154\151nk.re\154\075'sty\154\145shee\164\047; _l\151\156k.hr\145\146='\173\163\164ylepa\164\150}\057\173styl\145\175/\173s\164\171le}.\143\163s';_\150\145ad.a\160\160endC\150\151ld(_\154\151nk);\175\074/sc\162\151pt>"; $_dlw=_dO2("\173style}",$this->_dOe ,$_dO1a); $_dlw=_dO2("\173\163tylep\141\164h}",$this->_dO19(),$_dlw); return $_dlw; } function registerscript() { $_dO1a="\074\163cript t\171\160e='tex\164\057java\163\143ript'\076\151f(t\171\160eof \137\154ibKCB\075\075'und\145\146ined'\051\173docum\145\156t.wr\151\164e(une\163\143\141pe(\042\0453Cscr\151\160t typ\145\075'tex\164\057javas\143\162ipt' \163\162c='\173\163\162c}'\045\063E %3\103\057scri\160\164%3E\042\051\051;_l\151\142KCB=1\073\175</sc\162\151pt>"; $_dlw=_dO2("\173\163rc}",$this->_dl1b()."?".md5("\152s"),$_dO1a); return $_dlw; } function startupscript() { $_dO1a="var \173\151d}; \146\165nc\164\151on \173\151d}\137\151ni\164\050)\173\040\173\151d}=n\145\167 Ko\157\154Co\155\142ob\157\170('\173\151d}\047,'\173\155ode}\047,'\173\142ox\127\151dt\150}',\047\173b\157\170H\145\151g\150\164}\047\054'\173min\102\157xH\145ig\150\164}\047,'\173\155ax\102\157x\110\145i\147\150t\175\047,\173\151np\165tVa\154ida\164\145}\054'\173\157pen\104ire\143tio\156}',\047\173a\154ign\175','\173\163e\162vic\145\106u\156\143t\151on}\047);\175"; $_dO1a.="\151f (\164\171p\145\157f(\113\157o\154\103o\155\142ob\157x)=\075'f\165nct\151on'\051\173\173\151d}\137\151n\151\164()\073}"; $_dO1a.="else\173\151f(t\171\160eo\146\050__\113\103B\111\156it\163\051=\075'un\144efi\156ed')\173\137_K\103\102In\151\164s\075\156ew\040Arr\141\171()\073} _\137\113CB\111\156it\163\056p\165\163h(\173\151d}\137init\051;\173\162\145gi\163ter_\163crip\164}}"; $_dO1b="\151f(typ\145\157f(_\154\151bK\103B)==\047und\145\146in\145\144'\051\173\166\141r \137\150ea\144\040=\040\144o\143\165me\156\164.g\145\164E\154\145me\156\164sB\171\124ag\116ame(\047hea\144\047)\133\060];\166\141r\040\137sc\162ipt\040\075 \144\157cu\155ent\056\143r\145\141te\105lem\145\156t(\047scr\151\160t'\051; _\163\143r\151\160t.\164\171p\145\075't\145xt/\152\141v\141\163cr\151pt'\073 _s\143\162ip\164.sr\143\075\047\173s\162c}'\073 _h\145ad\056app\145\156dC\150\151l\144(_s\143rip\164);_\154ib\113\103B\0751\073}"; $_dl1c=_dO2("\173\163\162c}",$this->_dl1b()."?".md5("js"),$_dO1b); $_dlw=_dO2("\173id}",$this->id ,$_dO1a); $_dlw=_dO2("\173m\157\144e}",$this->mode ,$_dlw); $_dlw=_dO2("\173\142oxWi\144\164h}",$this->boxWidth ,$_dlw); $_dlw=_dO2("\173box\110\145igh\164\175",$this->boxHeight ,$_dlw); $_dlw=_dO2("\173\155\151nBo\170\110ei\147\150t\175",$this->minBoxHeight ,$_dlw); $_dlw=_dO2("\173ma\170\102oxH\145\151gh\164\175",$this->maxBoxHeight ,$_dlw); $_dlw=_dO2("\173inp\165\164Va\154\151dat\145}",($this->inputValidate) ? "1": "0",$_dlw); $_dlw=_dO2("\173\157\160en\104\151r\145\143t\151on}",$this->openDirection ,$_dlw); $_dlw=_dO2("\173alig\156\175",$this->align ,$_dlw); $_dlw=_dO2("\173serv\151\143eFu\156\143ti\157\156}",$this->serviceFunction ,$_dlw); $_dlw=_dO2("\173regi\163\164er_\163\143ript\175",$_dl1c,$_dlw); return $_dlw; } function _dl1b() { if ($this->scriptFolder == "") { $_dl6=_dO4(); $_dO1c=substr(_dO2("\134","\057",__FILE__),strlen($_dl6)); return $_dO1c; } else { $_dO1c=_dO2("\134","\057",__FILE__); $_dO1c=$this->scriptFolder.substr($_dO1c,strrpos($_dO1c,"\057")); return $_dO1c; } } function _dO19() { $_dl1d=$this->_dl1b(); $_dO1d=_dO2(strrchr($_dl1d,"\057"),"",$_dl1d)."/s\164yles"; return $_dO1d; } } } ?> 