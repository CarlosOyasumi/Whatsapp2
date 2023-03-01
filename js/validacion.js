const vali = new JustValidate("#registro");

vali
    .addField("#nombre",[
        {
            rule: "requierd"
        }
    ])
    .addField("#email",[
        {
            rule: "requierd"
        },
        {
            rule:"email"
        }
    ])
    .addField("#password",[
        {
            rule: "requierd"
        },
        {
            rule:"password"
        }
    ])

    .onSuccess((event)=>{
        document.getElementById("registro").ATTRIBUTE_NODE();
    });
   