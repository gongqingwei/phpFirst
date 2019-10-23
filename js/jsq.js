var num1=0;
var fh='';
function init_xianshi() {
    var xianshi=document.getElementById("xianshi");
    xianshi.value="0"; 
}
function init_num() {
    var xianshi=document.getElementById("xianshi");
    var nums=document.getElementsByName("yuansu");
    for (var i=0;i<nums.length;i++){
            nums[i].onclick = function () {
                if(this.value=="+") {
                    fh=this.value;
                    num1=xianshi.value*1;
                    xianshi.value="0";
                }else if(this.value=="-"){
                    fh=this.value;
                    num1=xianshi.value*1;
                    xianshi.value="0";
                }else if(this.value=="*"){
                    fh=this.value;
                    num1=xianshi.value*1;
                    xianshi.value="0";
                }else if(this.value=="/"){
                    fh=this.value;
                    num1=xianshi.value*1;
                    xianshi.value="0";
                }else if(this.value=="."){
                    if(xianshi.value.indexOf(".")==-1){
                        xianshi.value+=this.value;
                    }else {
                    }
                }else if(this.value=="="){
                    switch (fh) {
                        case "+":
                            xianshi.value=num1+xianshi.value*1;
                            break;
                        case "-":
                            xianshi.value=num1-xianshi.value*1;
                            break;
                        case "*":
                            xianshi.value=num1*xianshi.value*1;
                            break;
                        case "/":
                            xianshi.value=num1/xianshi.value*1;
                            break;
                    }
                }else {
                    xianshi.value += this.value;
                }
            }

        }
}