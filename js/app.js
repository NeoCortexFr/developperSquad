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
        event.preventDefault();
        //  console.log("front-end");
        let template = document.getElementById('frontend');
        let article = document.getElementById('article');
        let test = document.querySelector('#article .emptyTest');
          console.log(test);
        //  console.log("article = ", article);
        //  test condition:
        if (test == null) {
        //  if (article.content == '') {
        //  clone
        let clone = document.importNode(template.content, true);
        article.appendChild(clone);
        } else {
            alert("Vous y êtes déjà !");
        }
    },

    handleClickBack: function(event)
    {
        console.log("back-end");
        event.preventDefault();
        //  console.log("front-end");
        let template = document.getElementById('backend');
        let article = document.getElementById('articleTwo');
        let test = document.querySelector('#articleTwo .emptyTest');
          console.log(test);
        //  console.log("article = ", article);
        //  test condition:
        if (test == null) {
        //  if (article.content == '') {
        //  clone
        let clone = document.importNode(template.content, true);
        article.appendChild(clone);
        } else {
            alert("Vous y êtes déjà !");
        }
    },

    handleClickDatabase: function(event)
    {
        console.log("sql");
        event.preventDefault();
        //  console.log("front-end");
        let template = document.getElementById('database');
        let article = document.getElementById('articleThree');
        let test = document.querySelector('#articleThree .emptyTest');
          console.log(test);
        //  console.log("article = ", article);
        //  test condition:
        if (test == null) {
        //  if (article.content == '') {
        //  clone
        let clone = document.importNode(template.content, true);
        article.appendChild(clone);
        } else {
            alert("Vous y êtes déjà !");
        }
    }

};
document.addEventListener('DOMContentLoaded', app.init);