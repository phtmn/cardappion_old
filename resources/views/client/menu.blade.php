<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-75834608-2"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-75834608-2');
    </script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$menu->description}}</title>
    <script src="https://unpkg.com/@ionic/core@latest/dist/ionic.js"></script>
    <link href="https://unpkg.com/@ionic/core@latest/css/ionic.bundle.css" rel="stylesheet">
</head>
<body>
<ion-app>

    <ion-menu side="start" menu-id="first">
        <ion-header>
            <ion-toolbar color="primary">
                <ion-title>Categorias</ion-title>
            </ion-toolbar>
        </ion-header>
        <ion-content>
            <ion-list>
                <ion-item>Bebidas</ion-item>
                <ion-item>Hamburgues</ion-item>
                <ion-item>Pizzas</ion-item>
                <ion-item>Sobremesas</ion-item>
                <ion-item>Japonesa</ion-item>
            </ion-list>
        </ion-content>
    </ion-menu>




    </ion-menu>

    <div class="ion-page" main>
        <ion-header>
                <ion-title>{{ $menu->description }}</ion-title>
            </ion-toolbar>
        </ion-header>
        <ion-content padding>
            <ion-button expand="block" onclick="openFirst()">Ver categorias</ion-button>
                    <ion-list>
                        @forelse($menu->products as $item)
                          <ion-item href="{{route('product.detail',$item->id)}}">
                              <ion-thumbnail slot="start">
                                  <img src="{{Storage::url($item->image)}}" alt="">
                              </ion-thumbnail>

                              <ion-label>{{$item->description}} - {{$item->price}}</ion-label>

                          </ion-item>
                        @empty
                            <p>Nada a exibir</p>
                        @endforelse
                    </ion-list>
        </ion-content>
    </div>
</ion-app>

<ion-menu-controller></ion-menu-controller>

<script>
    const menuCtrl = document.querySelector('ion-menu-controller');

    function openFirst() {
        menuCtrl.enable(true, 'first');
        menuCtrl.open('first');
    }

    function openEnd() {
        menuCtrl.open('end');
    }

    function openCustom() {
        menuCtrl.enable(true, 'custom');
        menuCtrl.open('custom');
    }
</script>
</body>
</html>