var grades = {
    'list': {'egoing': 10, 'k8805': 6, 'sorialgi': 80},
    'show' : function(){
        for(var name in this.list){
            document.write(name+':'+this.list[name]+"<br />");
        }
    }
};
grades.show();