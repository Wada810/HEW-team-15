const insert = document.getElementById("order");
const form = document.getElementById('send_order');
const ol =  document.getElementById('order_list');



let order_cnt = 0;
let rock = 0;
let fix_flag = 0;
let disable = 0;

insert.addEventListener('change', ()=>{
// insert.addEventListener("focusout", ()=>{


    if(insert.value.trim() !== ""){

        // order_list(ulタグ)に指令を追加
        let li = document.createElement('li');
        li.name = "";
        
        li.className = "ol_order";
        li.classList.add(order_cnt);
        li.textContent = insert.value ;
        ol.appendChild(li);
    
        // send_order(formタグ)に指令をhiddenで追加
        let input = document.createElement('input');
        input.type = 'hidden';
        input.name = 'order[]';
        input.className = "form_order";
        input.classList.add(order_cnt);
        input.value = insert.value ;
    
        form.appendChild(input);
        
        order_cnt++
        // inputをリセット
        insert.value = "";
    
        // クリックしたらfocus にする処理
        
        li.addEventListener('dblclick',function li_func(){
            
            // 初期
            if(rock == 0){
                
                rock = 1;
                disable =  li.classList[1]
    
                let  focus = document.getElementsByClassName(li.classList[1]);
                const  focus_point = focus[0];
                focus_point.classList.add("focus");
                
                let p = document.createElement('p');
                p.id = "text";
                p.textContent = focus_point.textContent;
                focus_point.textContent = "";
                focus_point.appendChild(p);
                
                // 削除
                let del_button =  document.createElement('button');
                del_button.id = "delete";
                del_button.value = li.classList[1];
                del_button.textContent = "削除";
                focus_point.appendChild(del_button);
    
                // 編集
                let fix_button =  document.createElement('button');
                fix_button.id = "fix";
                fix_button.value = li.classList[1];
                fix_button.textContent = "編集";
                focus_point.appendChild(fix_button);
    
            }
    
            else if(disable == li.classList[1]){
                
                // 元に戻す
                let fix_button =  document.getElementById('fix');
                let del_button =  document.getElementById('delete');
                let text = document.getElementById("text");
                console.log(text.textContent)
                if(text.textContent.trim() == ""){
                    
                    const group  = document.getElementsByClassName(del_button.value);
                    disable = 0;
                    rock = 0;
                    fix_flag = 0;
                    // ol　+ form で計２回
                    group[0].remove();
                    group[0].remove();
                    return;
                }
    
                li.textContent = text.textContent;
                li.classList.remove("focus");
                fix_button.remove();
                del_button.remove();
                text.remove();
                rock = 0;
                fix_flag = 0;
                return;
            }
            
    
            // 初期
            if(fix_flag == 0){
    
                const del = document.getElementById("delete");
                del.addEventListener('click',(e) =>{
                    
                    const group  = document.getElementsByClassName(del.value);
                    disable = 0;
                    rock = 0;
                    fix_flag = 0;
                    // ol　+ form で計２回
                    group[0].remove();
                    group[0].remove();
                    
                });
    
                const fix = document.getElementById("fix");
                
                fix.addEventListener('click',(e) =>{
                    e.stopPropagation();
                    fix.disabled = true;
                    const group = document.getElementsByClassName(fix.value);
                    
                    let fix_point = document.getElementById("text");
                    // 編集可能にする
                    fix_point.innerHTML = '<input type="text" id="fix_order"  value="'+fix_point.textContent +'" ></input>'
                    
                    const fix_text  = document.getElementById("fix_order");
                    
                    // 編集後の処理
                    group[0].addEventListener("focusout", function fix_func(){
                        console.log(fix_text.value)
                        if(fix_text.value.trim() == ""){
                            fix_button =  document.getElementById('fix');
                            const group  = document.getElementsByClassName(fix_button.value);
                            disable = 0;
                            rock = 0;
                            fix_flag = 0;
                            // ol　+ form で計２回
                            group[0].remove();
                            group[0].remove();
                            return;
                        }

                        group[1].value = fix_text.value;
                        // 元に戻す
                        fix_point.textContent = fix_text.value
                        fix_text.remove();
                        fix.disabled = false;
                        this.removeEventListener('focusout', fix_func);
                    } ,false);
                    
                });
                
                fix_flag = 1;
            }
            
            
        })
    }else{
        insert.value = "";
    }
    
    
} ,false);

sort()

