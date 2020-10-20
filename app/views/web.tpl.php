<nav> 
                <a href="/">Accueil</a>
                <a href="https://www.french.dev/a-propos"> frenchDev </a>
                <a href="appli.html"> appli </a>
                <a href="logiciel.html"> logiciel </a>
               
            </nav>
        </header>
        <main class="mainWeb">
            <h3>Bienvenue dans le monde du Web :</h3>
            <section class="sectionWeb">
                <button id="front">Partie FRONT-END</button>
                <button id="back">Partie BACK-END</button>
                <button id="database">Partie DataBase</button>
            </section>
            <article id="articleFront">

            </article>
            <article id="articleBack">

            </article>
            <article id="articleBdd">

            </article>
        </main>
        <template id="frontend">
            <div class="emptyZone">
                <p>
                    <form method="POST" action="" class="formulaire">
                            <h5>FRONT-END</h5>
                        <div class="entry">
                            <label for="name">Nom / Pseudo:</label><br>
                            <input type="text" id="name" name="user_name" />
                        </div>
                        <div class="entry">
                            <label for="mail">E-mail:</label><br>
                            <input type="email" id="email" name="user_mail" />
                        </div>
                        <div class="entry">
                            <label for="git">Github</label><br>
                            <input type="url" id="git" name="user_git" />
                        </div>
                        
                        <div class="entry">
                            <label for="msg">Une p'tite description:</label><br>
                            <textarea id="msg" name="user_msg" rows="6" cols="33"></textarea>
                        </div>
                        <div class="entry">
                            <button type="submit" id="submit" class="submit">Envoyer votre demande</button>
                        </div>
                    </form>
                </p>
            </div>
        </template>
        <template id="backend">
            <div class="emptyZone">
               
            <p>
                <form method="POST" action="" class="formulaire">
                        <h5>BACK-END</h5>
                     <div class="entry">
                        <label for="name">Nom / Pseudo:</label><br>
                        <input type="text" id="name" name="user_name" />
                    </div>
                    <div class="entry">
                        <label for="mail">E-mail:</label><br>
                        <input type="email" id="email" name="user_mail" />
                    </div>
                    <div class="entry">
                        <label for="git">Github</label><br>
                        <input type="url" id="git" name="user_git" />
                    </div>
                    
                    <div class="entry">
                        <label for="msg">Une p'tite description:</label><br>
                        <textarea id="msg" name="user_msg" rows="6" cols="33"></textarea>
                    </div>
                    <div class="entry">
                        <button type="submit" id="submit" class="submit">Envoyer votre demande</button>
                    </div>
                </form>
            </p>
        </div>
        </template>
        <template id="bdd">
            <div class="emptyZone">
               
            <p>
                <form method="POST" action="" class="formulaire">
                        <h5>DATABASE</h5>
                     <div class="entry">
                        <label for="name">Nom / Pseudo:</label><br>
                        <input type="text" id="name" name="user_name" />
                    </div>
                    <div class="entry">
                        <label for="mail">E-mail:</label><br>
                        <input type="email" id="email" name="user_mail" />
                    </div>
                    <div class="entry">
                        <label for="git">Github</label><br>
                        <input type="url" id="git" name="user_git" />
                    </div>
                    
                    <div class="entry">
                        <label for="msg">Une p'tite description:</label><br>
                        <textarea id="msg" name="user_msg" rows="6" cols="33"></textarea>
                    </div>
                    <div class="entry">
                        <button type="submit" id="submit" class="submit">Envoyer votre demande</button>
                    </div>
                </form>
            </p>
        </div>
        </template>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script src="<?= $baseUri ?>/asset/js/vueJs.js"></script>
    <script src="<?= $baseUri ?>/asset/js/app.js"></script>