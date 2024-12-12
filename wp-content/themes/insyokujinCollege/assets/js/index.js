jQuery(function ($) {
    // 自動カナ入力
    $(document).ready(
        function () {
            $.fn.autoKana('#name-contact', '#rubi-contact', {
                katakana: false //trueでカタカナ、falseでひらがな（デフォルト）
            });
        });

    //郵便番号、住所自動入力
    $('#zip').keyup(function () {
        AjaxZip3.zip2addr(this, '', 'addTxt-contact', 'your-address01'); // ←ここはname属性値を入力
    });

});