## Install

add `tangniyuqi/yii2-layer` to composer.json

```sh
$ composer install
```

```
$ php composer.phar require tangniyuqi/yii2-layer "*"
```

or add

```
"tangniyuqi/yii2-layer": "*"
```

to the ```require``` section of your `composer.json` file.

## Usage

in view:

```
use tangniyuqi\assets\LayerAsset;

LayerAsset::register($this);

```

and for mobile, you can do like this:
```
use tangniyuqi\asset\LayerMobielAsset;

LaryerMobileAsset::regiter($this);
```