<h2>Invitation myColoc</h2>
<p>Vous avez été invité à rejoindre la colocation :</p>

<h3>{{ $colocationName }}</h3>

<p>Cliquez sur le bouton ci-dessous :</p>

<a href="{{ url('/invitation/'.$token) }}" 
   style="background:#5048e5;color:white;padding:10px 20px;text-decoration:none;border-radius:5px;">
    Voir l'invitation
</a>

<p>Ce lien est sécurisé et personnel.</p>