{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> --}}

    @extends('frontend.layouts.main')

@section('container')
<link rel="stylesheet" href="./bootstrap/css/bootstrap.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,600;1,300&display=swap" rel="stylesheet">
<link rel="stylesheet" href="./profil-anggota/style.css">
    <title>Document</title>
</head>
<body>
    <main id="cardContainer" style="margin-top: 60px">
        @foreach ($anggota as $anggotaa)
        <div style="width: 250;" class="card" >
          <img src="/images/imganggota/{{ $anggotaa->img }}" alt="">
          <div class="card-content">
            <h2>
                {{ $anggotaa->nama }}
            </h2>
            <h4 class="role">Role : {{ $anggotaa->role }}</h4>
            <h4 class="genre">Genre : {{ $anggotaa->genre }}</h4>
            <p>
                Deskripsi : {{ $anggotaa->deskripsi }}
                </p>
          </div>
        </div>
        @endforeach

      </main>
          
      <script>
        // const cardData = [
        //     { imgSrc: "./img/img.jpg", name: "Nama 1", role: "Role 1", genre: "Genre 1", description: "Deskripsi 1" }
        // ];

        function createCard(data) {
            const cardContainer = document.getElementById("cardContainer");

            const card = document.createElement("div");
            card.className = "card";

            const img = document.createElement("img");
            img.src = data.imgSrc;
            img.alt = "";

            const cardContent = document.createElement("div");
            cardContent.className = "card-content";

            const h2 = document.createElement("h2");
            h2.textContent = data.name;

            const role = document.createElement("h4");
            role.className = "role";
            role.textContent = "Role: " + data.role;

            const genre = document.createElement("h4");
            genre.className = "genre";
            genre.textContent = "Genre: " + data.genre;

            const p = document.createElement("p");
            p.className = "button";
            p.textContent = data.description;

            cardContent.appendChild(h2);
            cardContent.appendChild(role);
            cardContent.appendChild(genre);
            cardContent.appendChild(p);

            card.appendChild(img);
            card.appendChild(cardContent);

            cardContainer.appendChild(card);
        }

        for (let i = 0; i < cardData.length; i++) {
    const data = cardData[i];
    createCard(data);
}
    </script>
    @endsection</div>
{{-- </body>
</html> --}}