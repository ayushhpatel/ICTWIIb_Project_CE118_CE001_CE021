<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practise</title>
</head>
<body>


  <div id="list1" class="dropdown-check-list" tabindex="100">
      <span class="anchor">Select Fruits</span>
      <ul class="items">
          <li><input type="checkbox" />Apple </li>
          <li><input type="checkbox" />Berry </li>
          <li><input type="checkbox" />Mango </li>
          <li><input type="checkbox" />Banana </li>
      </ul>
  </div>

  <script type="text/javascript">
    
      var checkList = document.getElementById('list1');
      checkList.getElementsByClassName('anchor')[0].onclick = function (evt) {
          if (checkList.classList.contains('visible'))
              checkList.classList.remove('visible');
          else
              checkList.classList.add('visible');
      }

      checkList.onblur = function(evt) {
          checkList.classList.remove('visible');
      }
  </script>
</body>
</html>