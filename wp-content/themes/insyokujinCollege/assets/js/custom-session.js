// sessionStorageを活用する方法
// document.addEventListener('DOMContentLoaded', function() {
//   // URL のクエリパラメータを取得する関数
//   function getQueryParam(param) {
//     var params = new URLSearchParams(window.location.search);
//     return params.get(param) || '';
//   }

//   // 保存したいパラメーターの配列を定義
//   var paramsToStore = ['utm_source', 'utm_medium', 'utm_campaign'];

//   // 各パラメーターが存在する場合に sessionStorage に保存
//   paramsToStore.forEach(function(param) {
//     var value = getQueryParam(param);
//     if (value) {
//       sessionStorage.setItem(param, value);
//     }
//   });

//   // UTMパラメーターがない場合は referrer を保存（utm_sourceとして利用する例）
//   if (!sessionStorage.getItem('utm_source')) {
//     var referrer = document.referrer || 'direct';
//     sessionStorage.setItem('utm_source', referrer);
//   }
// });

// localStorageを活用する方法
document.addEventListener('DOMContentLoaded', function() {
  // URL のクエリパラメーターを取得する関数
  function getQueryParam(param) {
    var params = new URLSearchParams(window.location.search);
    return params.get(param) || '';
  }

  // 保存したいパラメーターの配列を定義
  var paramsToStore = ['utm_source', 'utm_medium', 'utm_campaign'];

  // 各パラメーターが存在する場合にlocalStorageに保存
  paramsToStore.forEach(function(param) {
    var value = getQueryParam(param);
    if (value) {
      localStorage.setItem(param, value);
    }
  });

  // もしlocalStorageにutm_sourceがない場合は、document.referrerを利用
  if (!localStorage.getItem('utm_source')) {
    var referrer = document.referrer || 'direct';
    localStorage.setItem('utm_source', referrer);
  }
  // フォームの隠しフィールドにlocalStorageの値をセット
  paramsToStore.forEach(function(param) {
    var inputField = document.querySelector('input[name="' + param + '"]');
    if (inputField) {
      var storedValue = localStorage.getItem(param);
      if (storedValue) {
        inputField.value = storedValue;
        console.log(param + ': ' + storedValue);
      }
    }
  });
});