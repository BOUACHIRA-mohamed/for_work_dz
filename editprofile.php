<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Responsive Registration Form</title>
    <meta name="viewport" content="width=device-width,
      initial-scale=1.0"/>
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body>      
    <div class="container">

      <div class="upload">
        <img src="ProfileIMG.png" width = 100 >
        <div class="round">
          <input type="file">
          <i class = "fa fa-camera"></i>
        </div>
      </div>

      <form action="#">
        <div class="main-user-info">  
          <div class="user-input-box">
            <label for="Nom">Nom</label>
            <input type="text"
                    id="Nom"
                    name="Nom"
                    placeholder="Entrez Nom"/>
          </div>
          <div class="user-input-box">
            <label for="Prenom">Prenom</label>
            <input type="text"
                    id="username"
                    name="username"
                    placeholder="Entrez Prenom"/>
          </div>
          <div class="user-input-box">
            <label for="email">Email</label>
            <input type="email"
                    id="email"
                    name="email"
                    placeholder="ForWork@gmail.com"/>
          </div>
          <div class="user-input-box">
            <label for="Téléphone">Téléphone</label>
            <input type="text"
                    id="Téléphone"
                    name="Téléphone"
                    placeholder="+213567-567-567"/>
          </div>
          <div class="user-input-box">
            <label for="date de naissance">date de naissance</label>
            <input type="date"
                    id="date de naissance"
                    name="date de naissance"/>
          </div>
          <div class="user-input-box">
            <label for="Wilaya">Wilaya</label>
            <select>
              <option value="Adrar" name="">Adrar</option>
              <option value="Chlef" name="">Chlef</option>
              <option value="Laghouat" name="">Laghouat</option>
              <option value="Oum El Bouaghi" name="">Oum El Bouaghi</option>
              <option value=" Batna " name="">Batna</option>
              <option value="Bejaïa" name="">Bejaïa</option>
              <option value="Biskra " name="">Biskra</option>
              <option value="Béchar" name="">Béchar</option>
              <option value="Blida" name="">Blida</option>
              <option value="Bouira" name="">Bouira</option>
              <option value="Tamanrasset" name="">Tamanrasset</option>
              <option value="Tebessa" name="">Tebessa</option>
              <option value="Telemcen" name="">Telemcen</option>
              <option value="Tiaret" name="">Tiaret</option>
              <option value="Tizi ouzou" name="">Tizi ouzou</option>
              <option value="Alger" name="">Alger</option>
              <option value="Djelfa" name="">Djelfa</option>
              <option value="Djijel" name="">Djijel</option>
              <option value="Setif" name="">Setif</option>
              <option value="Saida" name="">Saida</option>
              <option value="Skikda" name="">Skikda</option>
              <option value="Sidi Bel Abbes" name="">Sidi Bel Abbes</option>
              <option value="Annaba" name="">Annaba</option>
              <option value="Guelma" name="">Guelma</option>
              <option value="Constantine" name="">Constantine</option>
              <option value="Médéa" name="">Médéa</option>
              <option value="Mostaganem" name="">Mostaganem</option>
              <option value="M'Sila " name="">M'Sila</option>
              <option value="Mascara" name="">Mascara</option>>
              <option value="Ouargla" name="">Ouargla</option>
              <option value="Oran" name="">Oran</option>
              <option value="EL Bayadh" name="">EL Bayadh</option>
              <option value="Ilizi" name="">Ilizi</option>
              <option value="Bordj Bou Arreridj " name="">Bordj Bou Arreridj</option>
              <option value="Boumerdès " name="">Boumerdès</option>
              <option value="El Tarf" name="">El Tarf</option>
              <option value="Tindouf " name="">Tindouf</option>
              <option value="Tissemsilt " name="">Tissemsilt</option>
              <option value="El Oued " name="">El Oued</option>
              <option value="Khenchela " name="">Khenchela</option>
              <option value=" Souk Ahras " name="">Souk Ahras</option>
              <option value="Tipaza " name="">Tipaza</option>
              <option value="Mila" name="">Mila</option>
              <option value="Aïn Defla" name="">Aïn Defla</option>
              <option value="Naâma" name="">Naâma</option>
              <option value="Aïn Témouchent" name="">Aïn Témouchent</option>
              <option value="Ghardaia " name="">Ghardaia</option>
              <option value="Relizane " name="">Relizane</option>
            </select>
          </div>
          <div class="user-input-box">
            <label for="compétences">compétences</label>
            <input type="text"
                    id="compétences"
                    name="compétences"
                    placeholder="compétences"/>
          </div>
          <div class="user-input-box">
            <label for="éducation">Education</label>
            <input type="text"
                    id="éducation"
                    name="éducation"
                    placeholder="éducation"/>
          </div>
          <div class="user-input-box">
            <label for="Intérêts">Intérêts</label>
            <input type="text"
                    id="Intérêts"
                    name="Intérêts"
                    placeholder="Intérêts"/>
          </div>
          <div class="user-input-box">
            <label for="Experience">Experience</label>
            <input type="text"
                    id="Experience"
                    name="Experience"
                    placeholder="Experience"/>
          </div>
          <div class="scanneDiplome ">
            <button type = "button" class = "btn-warning">
              <i class = "fa fa-upload"></i> Diplome
              <input type="file">
            </button>
          </div>

        </div>
        <div class="gender-details-box">
          <span class="gender-title">Sex</span>
          <div class="gender-category">
            <input type="radio" name="gender" id="male">
            <label for="Homme">Homme</label>
            <input type="radio" name="gender" id="female">
            <label for="Femme">Femme</label>
          </div>
        </div>
        <div class="form-submit-btn">
          <input type="submit" value="Register">
        </div>
      </form>
    </div>
  </body>
</html>
