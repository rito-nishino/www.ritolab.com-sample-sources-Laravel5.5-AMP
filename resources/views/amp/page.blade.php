<!DOCTYPE html>
<html amp lang="ja">
<head>
  <meta charset="UTF-8">
  <title>AMP Page</title>
  <link rel="canonical" href="{{$canonical_url}}">
  <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">
  <script type="application/ld+json">
      {
        "@context": "http://schema.org",
        "@type": "NewsArticle",
        "headline": "Open-source framework for publishing content",
        "datePublished": "2015-10-07T12:02:41Z",
        "image": [
          "logo.jpg"
        ]
      }
  </script>
  <style amp-boilerplate>body{-webkit-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-moz-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-ms-animation:-amp-start 8s steps(1,end) 0s 1 normal both;animation:-amp-start 8s steps(1,end) 0s 1 normal both}@-webkit-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-moz-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-ms-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-o-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}</style><noscript><style amp-boilerplate>body{-webkit-animation:none;-moz-animation:none;-ms-animation:none;animation:none}</style></noscript>
  <style amp-custom>
    {{$styles}}
  </style>
  <script async src="https://cdn.ampproject.org/v0.js"></script>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:300,400,600">
</head>
<body>
<div class="container">
  <section>
    <h1 class="page_title">AMP Sample Page</h1>
    <p class="image_wrap">
      <amp-img src="{{asset('/images/amp-logo.jpg')}}" alt=logo width=1200 height=630 layout=responsive></amp-img>
    </p>
    <p>
      ＡＭＰ実装サンプルページです。
    </p>
    <p class="message">
      このページは　<span class="message_em">{{$message}}</span>　です。
    </p>
  </section>
</div>
</body>
</html>