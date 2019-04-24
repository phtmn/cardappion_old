<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Budged Planner</title>
    <script src="https://unpkg.com/@ionic/core@latest/dist/ionic.js"></script>
    <link href="https://unpkg.com/@ionic/core@latest/css/ionic.bundle.css" rel="stylesheet">
</head>
<body>
<ion-app>
    <ion-header>
        <ion-toolbar color="primary">
            <ion-title>{{$menu->description}}</ion-title>
        </ion-toolbar>
    </ion-header>
    <ion-content>
        <ion-list>
            @forelse($menu->products as $item)
              <ion-item>
                  <ion-label>{{$item->description}} - {{$item->price}}</ion-label>
              </ion-item>
            @empty
                <p>Nada a exibir</p>
            @endforelse
        </ion-list>
    </ion-content>
    <ion-alert-controller></ion-alert-controller>
</ion-app>

</body>
</html>