 
// Indicateur de chargement (Skeleton)
const loadingHtml = `<div class="ssc ssc-card">
                          <div class="ssc-wrapper">
                              <div class="ssc-square mb"></div>
                              <div class="flex align-center justify-between">
                                  <div class="w-40">
                                      <div class="ssc-line w-70"></div>
                                      <div class="ssc-line w-100"></div>
                                  </div>
                                  <div class="ssc-head-line w-50"></div>
                              </div>
                          </div>
                          <div class="ssc-hr"></div>
                          <div class="ssc-wrapper">
                              <div class="ssc-line w-90"></div>
                              <div class="ssc-line w-30"></div>
                              <div class="ssc-line w-70"></div>
                              <div class="ssc-line w-50"></div>
                          </div>
                          <div class="ssc-hr"></div>
                          <div class="ssc-wrapper">
                              <div class="ssc-head-line"></div>
                          </div>
                      </div>`;

/**
 * Traitement des liens Ajax
 */
 const mkAjaxLinks = function mkAjaxLinksFunc($) {
  const $container = $("#main");
  $(document).on('click', 'a.ajax', function (e) {
    if (e) e.preventDefault();
    const $target = $(e.target);
    var $link;
    if( $target[0].tagName == 'A' ){
        $link = $target;
    } else {
        var $parents = $target.parents('a.ajax');
        $link = $parents.eq(0);
    }
    $container.html(loadingHtml);
    $.ajax({
      url: $link.attr("href"),
      success: function (result) {
        $container.html(result);
      },
      error: function () {
        alert('Une erreur est survenue, vous allez être redirigé vers l\'accueil.');
        window.location.href = '/';
      },
    });
  });
};


/**
 * Traitement des formulaires Ajax
 */
const mkAjaxForms = function mkAjaxFormsFunc($) {
  const $container = $("#main");
  $(document).on('submit', 'form.ajax', function (e) {
    if (e) e.preventDefault();
    const $form = $(e.target);
    $container.html(loadingHtml);
    $.ajax({
      type: "POST",
      url: $form.attr("action"),
      data: $form.serialize(),
      success: function (result) {
        $container.html(result);
      },
      error: function () {
        alert('Une erreur est survenue, vous allez être redirigé vers l\'accueil.');
        window.location.href = '/';
      },
    });
  });
};

/**
 * Lancement au DOMREADY
 */
jQuery(document).ready(function ($) {
  mkAjaxForms($);
  mkAjaxLinks($);
});
