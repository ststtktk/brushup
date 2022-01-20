function delete_alert(event)
{
    if(!window.confirm('本当に削除しますか？'))
        {
            window.alert('キャンセルされました');
            return false;
        }    
        document.deleteform.submit();
};

function update_alert(event)
{
    if(!window.confirm('更新しますか？'))
        {
            window.alert('キャンセルされました');
            return false;
        }    
        document.updateform.submit();
};

function submit_alert(event)
{
    if(!window.confirm('送信しますか？'))
        {
            window.alert('キャンセルされました');
            return false;
        }
        document.submitform.submit();
};

function register_alert(event)
{
    if(!window.confirm('登録しますか？'))
        {
            window.alert('キャンセルされました');
            return false;
        }
        document.registerform.submit();
};

const career = document.getElemeneById('career');
//カーソルが上に乗った時
career.addEventListener('mouseover',()=>{
    
}, false);