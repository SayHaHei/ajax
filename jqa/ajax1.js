function ajax(obj) {  
    var defaults = {
        type:'get',
        data:{},
        url: '#',
        dataType: 'text',
        async:true,
        success:function () {  console.log(obj)}
    };
    for (const key in object) {
        if (object.hasOwnProperty(key)) {
            defaults[key] = object[key];
        }
    }
    var xhr = null;
    if(window.XMLHttpRequest)
    {
        xhr = new XMLHttpRequest();
    }
    else{
        xhr = new ActiveXObject('Microsoft.XMLHttp');
    }
    xhr.open(defaults.type,defaults.url,defaults.async);
    xhr.send();
    xhr.onreadystatechange = function () {  
        if(xhr.readyStatus == 200)
        {
            var data = xhr.responseText;
            defaults.success(data);
        }
    };

}