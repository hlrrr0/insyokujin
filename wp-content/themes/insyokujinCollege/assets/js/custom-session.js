document.addEventListener('DOMContentLoaded', function() {
  // URL のクエリパラメータを取得する関数
  function getQueryParam(param) {
    var params = new URLSearchParams(window.location.search);
    return params.get(param) || '';
  }

  // 保存したいパラメーターの配列を定義
  var paramsToStore = ['utm_source', 'utm_medium', 'utm_campaign'];

  // 各パラメーターが存在する場合に sessionStorage に保存
  paramsToStore.forEach(function(param) {
    var value = getQueryParam(param);
    if (value) {
      sessionStorage.setItem(param, value);
    }
  });

  // UTMパラメーターがない場合は referrer を保存（utm_sourceとして利用する例）
  if (!sessionStorage.getItem('utm_source')) {
    var referrer = document.referrer || 'direct';
    sessionStorage.setItem('utm_source', referrer);
  }
});
