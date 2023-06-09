
var corps=document.querySelector(".corps");
var btn=document.querySelector(".input-type-submit");
btn.onclick=()=>{
    corps.innerHTML =` <div class="main">
    <section class="signup">
    <div class="container">
    <div class="signup-content">
    <form method="POST" id="signup-form" class="signup-form" action="">
      @csrf    
    
        <div class="form-group">
            <label class="titre">NOM   :   <strong style="color : red ;"> SEKPON</strong></label>
        </div>
        <div class="form-group">
            <label class="titre">PRENOM  :  <strong style="color : red ;"> Mauriac</strong></label>
        </div>
        <div class="form-group">
            <label class="titre">EMAIL  :   <strong style="color : red ;"> semauzic71@gmail.com</strong></label>
        </div>
        <div class="form-group">
            <input type="submit" name="submit" id="submit" class="form-submit" value="Telecharger" />
        </div>
    </form>
    </div>
    </div>
    </section>
    </div> `;
}

