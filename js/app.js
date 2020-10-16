let app = {
    init: function()
    {
        console.log("init_loader");
        
        let front = document.getElementById('front');
        front.addEventListener('click', app.handleClickFront);
      
        let back = document.getElementById('back');
        back.addEventListener('click', app.handleClickBack);

        let bdd = document.getElementById('bdd');
        bdd.addEventListener('click', app.handleClickDatabase);
    },

    handleClickFront: function(event)
    {
        console.log("front-end");
    },

    handleClickBack: function(event)
    {
        console.log("back-end");
    },

    handleClickDatabase: function(event)
    {
        console.log("sql");
    }

};
document.addEventListener('DOMContentLoaded', app.init);