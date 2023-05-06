# E-Ticaret

### Installation //Kurulum

Bu projenin amacı, bir web tabanlı alışveriş sitesi geliştirmektir. Bu site, birçok sektöre uygulanabilir, ancak benim proje konum Pet Shop mağazası. Projenin üç tip kullanıcısı vardır: super yönetici (super admin), yönetici (admin) ve kullanıcı (user). Kullanıcılar, alışveriş sepetine ürün ekleyerek alışveriş yapabilir, yöneticiler ise sistemi kontrol eder, ürünleri ekler, günceller ve stok bilgisini takip ederek siparişleri yönetir.

Projenin ön yüzü, kullanıcının siteye girdiği ilk sayfa ana sayfadır. Bu sayfada, kullanıcının ürünleri görüntülemesi, sepetine eklemesi ve ödeme yapması için gerekli tüm bilgiler yer almaktadır. Admin paneli, yöneticilerin sistemi kontrol etmesine izin verir ve siparişleri yönetmesine yardımcı olur. Bu panel, ürünleri eklemek, güncellemek, stok bilgisini kontrol etmek ve siparişleri takip etmek için gereken tüm araçları sağlar.

Projenin yapısı, Model-View-Controller (MVC) tasarım deseni kullanılarak oluşturulmuştur. Bu tasarım, uygulamanın karmaşıklığını azaltır ve uygulamanın farklı parçalarının birbirinden bağımsız olmasını sağlar.

Projede, kullanıcı ekleme, kullanıcı oturum açma, kullanıcı bilgilerini güncelleme, ürün ekleyip güncelleme, fotoğraf yükleme ve ürünleri satışa sunma gibi birçok özellik yer alacaktır. Bu özellikler, kullanıcıların alışveriş yapmasını kolaylaştırmak için tasarlanmıştır.


Install the dependencies and devDependencies and start the server. //Bağımlılıkları yükleyin.

```sh
$ composer install
$ npm install
```

Create .env file from .env.example than:

```sh
$ php artisan key:generate
```

### Run

You can start the localhost with this code.

```sh
$ php artisan serve
$ npm run watch
```
