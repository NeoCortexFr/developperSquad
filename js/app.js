let app = {
    init: function()
    {
        console.log("init_loader");
        
        let front = document.getElementById('front');
        front.addEventListener('click', app.handleClickFront);
      
        let back = document.getElementById('back');
        back.addEventListener('click', app.handleClickBack);

        let bdd = document.getElementById('database');
        bdd.addEventListener('click', app.handleClickDatabase);
    },

    handleClickFront: function(event)
    {
        event.preventDefault();

        let template = document.getElementById('frontend');
        let article  = document.getElementById('articleFront');
        let screenOn = document.querySelector('#articleFront .emptyZone');

        if (screenOn == null) {
            let clone = document.importNode(template.content, true);
            article.appendChild(clone);
        } else {
            alert("Vous y êtes déjà !");
        }
    },

    handleClickBack: function(event)
    {
        event.preventDefault();

        let template = document.getElementById('backend');
        let article  = document.getElementById('articleBack');
        let screenOn = document.querySelector('#articleBack .emptyZone');

        if (screenOn == null) {
            let clone = document.importNode(template.content, true);
            article.appendChild(clone);
        } else {
            alert("Vous y êtes déjà !");
        }
    },

    handleClickDatabase: function(event)
    {
        event.preventDefault();

        let template = document.getElementById('bdd');
        let article  = document.getElementById('articleBdd');
        let screenOn = document.querySelector('#articleBdd .emptyZone');

        if (screenOn == null) {
            let clone = document.importNode(template.content, true);
            article.appendChild(clone);
        } else {
            alert("Vous y êtes déjà !");
        }
    }

};
document.addEventListener('DOMContentLoaded', app.init);