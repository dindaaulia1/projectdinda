<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>obor123</title>
</head>
<body>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>slot</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/vue@2.6.0/dist/vue.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
  
  <div id="app">
    <navigasi-bar :href="url">
      youtube
      <icon></icon>
    </navigasi-bar>
  </div>
  
  <script>
   Vue.component('navigasiBar', {
      template: `
        <a> <slot></slot> </a>
      `
      })
   //tempalte 'icon' akan disematkan dalam template 'navigasi-bar'
   Vue.component('icon', { 
      template: `<span class="fa fa-youtube fa-lg"></span>`
      })
   new Vue({
      el: '#app', 
      data: { url: "https://www.youtube.com/" } 
      })
  </script>
</body>
</html>
</body>
</html>