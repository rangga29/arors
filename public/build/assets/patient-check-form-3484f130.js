function l(t){let a=t.target,e=a.value.replace(/\D/g,"").substring(0,8);e.length>4?e=e.replace(/^(\d{2})(\d{2})(\d{0,4})/,"$1/$2/$3"):e.length>2&&(e=e.replace(/^(\d{2})(\d{0,2})/,"$1/$2")),a.value=e}document.addEventListener("input",function(t){t.target.matches("#birthday")&&l(t)});
