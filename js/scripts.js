jq = jQuery.noConflict();
jq(document).ready(function($) {
    //get height
    pgHeight = jq(document).height();
    console.log(pgHeight);
    jq('.overlay').css({height : pgHeight + 'px'});

    //alteracao das tabs da pagina inicial
    jq('ul.menu-cadastro li a').click(function() {
        jq('ul.menu-cadastro li a').removeClass('active');
        jq(this).addClass('active');
        menuOption = jq(this).parent().attr('class');
        jq('.content-cadastro').hide();
        jq('#' + menuOption).show();
    });

    //abrir div de publicacao automatica
    jq('.btn-avanced, #published-avancado .sprite-close_blue').click(function() {
        jq('#published-avancado').toggle();
    });

    //abertura das opcoes do menu do topo da pagina principal
    jq('.top-btn').click(function() {
        getClass = jq(this).attr('class');
        if (getClass.indexOf('box-notificacoes') != -1 || getClass.indexOf('bgr-white') != -1) {
            jq(this).find('.box-expand').toggle();
        } else {
            if (jq(this).next().is(':visible')) {
                jq('.box-expand').hide();
            } else {
                jq('.box-expand').hide();
                areaToExpand = '#' + jq(this).parent().attr('area-btn');
                jq(areaToExpand).show();
                console.log(areaToExpand);
            }
        }

        return false;
    });

    //exibir tipo lista
    jq('.list').click(function() {
        jq('.box-content, .box-approve, .box-comment, span.box-denuncia, span.data-publicacao-list, div.publish-details-list, .sprite-open_white.expand-publish').toggle();
        jq('.box-feed').toggleClass('margin-bottom');
        jq('.box-feed').toggleClass('tipo-lista-feed');
        jq('.artigo').toggleClass('tipo-lista');
        classe = jq('.box-feed .sprite-favorito').attr('class');
        if (classe.indexOf('no-margin-right') == -1) {
            jq('.box-feed .sprite-favorito').addClass('no-margin-right');
        } else {
            jq('.box-feed .sprite-favorito').removeClass('no-margin-right');
        }

        return false;
    });

    //expandir publicacao
    jq('.sprite-open_white.expand-publish').click(function() {
        jq('.artigo').toggleClass('tipo-lista');
        jq(this).parent().parent().find('.box-content, .box-approve, .box-comment, .publish-details-list, .data-publicacao-list').toggle();
        jq(this).toggleClass('rotacao-list');
    });

    //adicionar aos favoritos
    jq('.sprite-favorito').click(function() {
        jq(this).toggleClass('favorited');
    });

    //conectado
    jq('.conectado').click(function() {
        jq(this).toggleClass('active')
    });

    //btn cadastro
    jq('.btn-cadastras').click(function() {
        jq('.overlay').toggle();
        jq('.overlay').addClass('flex');
        jq('.lightbox .sprite-reprovar').click(function() {
            jq('.overlay').removeClass('flex');
            jq('.overlay').toggle();
        });
        return false;
    });

    //desafios
    jq('ul.desafios a').click(function() {
        jq('ul.desafios a').removeClass('active');
        jq('.des.active').hide().removeClass('active');
        idDesafio = jq(this).parent().attr('class');
        jq(this).addClass('active');
        jq('#' + idDesafio).toggle().addClass('active');
    })

    //option select
    jq('.sprite-select').click(function(){
      jq(this).toggleClass('active');
    })

    //overlay conquistas
    jq('.medalhas_conquistadas i').click(function() {
        jq('.overlay').toggle();
        jq('.overlay').addClass('flex');
        jq('.box-feed .sprite-close_blue').click(function() {
            jq('.overlay').removeClass('flex');
            jq('.overlay').toggle();
        });
        return false;
    });

    //clique select
    jq('.select-seta').click(function(){
      htmlSelect = jq(this).prev().find('option');
      jq(this).prev().change();
    });

    //close overlay
    jq('.box-feed .sprite-close_blue').click(function() {
        jq(this).parent().fadeOut();
    });

    jq('.overlay').click(function(e){
        if(e.target.className.indexOf("overlay") >= 0){
          jq(this).removeClass('block');
          jq(this).hide();
        }

    });


    //open interacoes
    jq('.interacoes .alert-icon, .interacoes .alert-msg').click(function(){
        jq('.interacoes .interacao').toggle();
    })

    //avancar pub alert-avancado
    jq('#passo1 .btn-avancar').click(function(){
      jq('#passo1').hide();
      jq('#passo2').show();
    });
    jq('#passo2 .btn-voltar').click(function(){
      jq('#passo2').hide();
      jq('#passo1').show();
    });

    //bloqueio anuncios
    jq(window).scroll(function (event) {
      var scroll = jq(window).scrollTop();
      console.log(scroll);
      if(scroll > 509){
        jq('.home-concurseiro #content-right').addClass('content-right-fixed');
      }
      else{
        jq('.home-concurseiro #content-right').removeClass('content-right-fixed');
      }

      if(scroll > 403){
        jq('.home-concurseiro #content-left nav').addClass('content-left-fixed');
        jq('.home-concurseiro #content-left .user-details').hide();
      }
      else{
        jq('.home-concurseiro #content-left nav').removeClass('content-left-fixed');
        jq('.home-concurseiro #content-left .user-details').show();
      }

      if(scroll >= 893){
        jq('#papo-concurseiro #content-left .anuncios-box').addClass('content-left-fixed');
        jq('#papo-concurseiro #content-left .channel-info').hide();
      }
      else{
        jq('#papo-concurseiro #content-left .anuncios-box').removeClass('content-left-fixed');
        jq('#papo-concurseiro #content-left .channel-info').show();
      }
    });

    //show modla comentarios
    jq('.btn-enviar_comentario').click(function(){
      console.log('comentario');
      jq('.overlay.caderno').toggle();
    });

    //show modal comprar
    jq('.btn-comprar_forum').click(function(){
      jq('.overlay.bloco-forum').toggle();
    });

    jq('.btn-saber_mais').click(function(){
      jq('.overlay.bloco-papiro').toggle();
    });

    jq('.btn-avaliar_curso').click(function(){
      jq('.overlay.bloco-aulas').toggle();
    });

    jq('.sprite-duvida, .duvida u').click(function(){
      jq('.overlay.bloco-forum1').toggle();
    });

    jq('.btn-indicar').click(function(){
      jq('.editais').toggle();
      jq('#published-indicacao.block').removeClass('block');
    })

    jq('.btn-avancar-professores').click(function(){
      jq('.div-professores1').toggle();
      jq('.form-professores').toggle();
    })

    jq('.btn-avancar-anunciantes').click(function(){
      jq('.div-anunciantes1').toggle();
      jq('.form-anunciantes').toggle();
    })
});
