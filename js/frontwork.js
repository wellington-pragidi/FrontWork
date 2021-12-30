$(document).ready(function() {

    function doc_url() {
        var documentURL = '//'+document.URL.replace(/(^\w+:|^)\/\//, '')
        return documentURL
    }

    function toggle(parent_element, element, add_class) {
        $(parent_element + ' ' + element).on('click', function() {
            if( $(this).hasClass(add_class) ) {
                $(this).removeClass(add_class);
            }
            else {
                $(this).addClass(add_class);
            }
        })
    }

    function effect_scroll(height, element, add_class) {
        $(window).scroll(function() {
            if($(this).scrollTop() > height) {
                $(element).addClass(add_class)
            } else {
                $(element).removeClass(add_class)
            }
        })
    }
    /** saída para adicionar efeitos no scroll: 
     * 
     * effect_scroll(height, "element", "add_class")
     * 
     * height:    altura medida em px a partir do topo 
     * element:   #id, .class ou tag do elemento a ser alterado
     * add_class: nome da classe a ser adicionada junto a element quando atingir a altura (height)
     */

    effect_scroll(70, ".backtop", 'visible')



    // Navbar horizontal
    toggle("#navhor", ".toggle", "opened")
    /* adiciona classes "current" e "active" a qualquer link correspondente a url */
    $("#navhor a").each(function() {
        if($(this).attr("href") == doc_url()) {
            $(this).addClass("current active")
        } 
    })
    /* adiciona classes "current" e "active" no link a.opendown quando um link do submenu for ".current.active" */
    $("#navhor .is_sub a").each(function() {
        if($(this).attr("href") == doc_url()) {
            $(this).closest(".has_sub").addClass("has_current")
        }
    })
    $("#navhor .has_current a.opendown").each(function() {
        $(this).addClass("current active")
    })
    /* abre/fecha submenus */
    $("#navhor").append('<div class="overlay hidden">');
    $("#navhor .opendown").on('click', function() {
        if( $(this).hasClass("onopened") ) {
            $(this).removeClass("onopened")
            $("#navhor .overlay").addClass("hidden")
        } else {
            $(this).addClass("onopened")
            $("#navhor .overlay").removeClass("hidden")
        }
    })
    /* click fora do menu e fecha submenu */
    $("#navhor .overlay").on('click', function() {
        if( $("#navhor .opendown").hasClass("onopened") ) {
            $("#navhor .opendown").removeClass("onopened")
        }
        if( $(this).hasClass("hidden") ) {
            $(this).removeClass("hidden")
        } else {
            $(this).addClass("hidden")
        }
    })
    /* no hover adiciona classe "under" aos links e remove a classe "current" do link atual */
    $("#navhor .listing a").hover(
        function() { 
            $("#navhor .listing a.active").removeClass("current");
            $(this).addClass("under");
            var position = $(this).position().left;
            var width = Math.round($(this).width() / 2) - 150;
            var action = position + width;
            $("#navhor .listing a.under::after").css("left", action);
        },
        function() {
            $("#navhor .listing a.active").addClass("current");
            $(this).removeClass("under") 
        }
    )


    // Navbar vertical
    toggle("body", "#navertoogle", "opened")
    $("#naver a").each(function() {
        if($(this).attr("href") == doc_url()) {
            $(this).addClass("current")
            $(this).closest(".has_sub").addClass("opened")
        } 
    })
    /* adiciona class opened in li com sub-list */
    $("#naver .has_sub").each(function() {
        $(this).on("click", function() {
            if($(this).hasClass("opened"))
                $(this).removeClass("opened")
            else 
                $(this).addClass("opened")
        })
    })
    /* Sub-List: addiciona class current in link e class opened in tag li antecessor */
    $("#naver .is a").each(function() {
        if($(this).attr("href") == doc_url()) {
            $(this).addClass("current")
            $(this).closest(".has_sub").addClass("opened")
        } 
    })


    // Accordions:
    // toogle para todos accordions
    $(".accordion").each(function() {
        $(this).find(" .acc_title").on("click", function() {
            $(this).toggleClass("expanded")
            $(this).next().slideToggle(400)
        })
    })
    // primeiro accordion aberto
    $(".accopen .acc_title:first-child").addClass("expanded")
    $(".accopen .acc_title.expanded + .acc_content").show()
    // mantem somente um accordion aberto por vez
    $(".openone .acc_title").each(function() {
        $(this).on('click', function() {
            $(".openone .acc_content").not($(this).next()).slideUp(400)
            $(".openone .acc_title").not($(this)).removeClass("expanded")
        })
    })


    // Popup modal:
    $(".mp_open").click(function() {
        var data_mp = $(this).attr("data-mp");
        $("#" + data_mp).css("display", "block")
        $("body").css("overflow-y", "hidden") // Exclui duplo scrollbar.
    })
    $(".mp_header").each(function() {
        $(this).prepend('<em class="mp_close close"></em>')
    })
    $('<div class="mp_over"></div>').appendTo(".modal_popup")
    $(".mp_close, .mp_over").click(function() {
        $(".modal_popup").css("display", "none")
        $("body").css({"overflow-y": "auto"}) // Rotarna scrollbar no body.
    })


    // Nav Tab
    $(".navtab li").click(function() {
        // Armazene o índice do link em que foi clicado
        var index = $(this).index();
        $(".navtab li").removeClass("active")
        $(this).addClass("active")
        $(".tabcontent").removeClass("active")
        $(".tabcontent").eq(index).addClass("active")
    })


    // Ancoras para links
    $(".anchor").on('click', function() {
        var fate = $(this).attr('href').split('#').pop();
        $('html, body').animate({scrollTop: $('#'+fate).offset().top }, 1000)
        return false;
    })


    // Icone de discarte
    $(".discard").each(function() {
        $(this).prepend('<span class="close"></span>')
    })
    $(".close").each(function() {
        $(this).on('click', function() {
            $(this).parent().fadeOut('slow', function() {})
        })
    })


    /**-----------------------------------
     *       Itens de formulario
     *                                   */

    // select checkboxes
    $("#select_ckbs").click(function() {
        if(this.checked) {
            $('.ckb').each(function() {
                this.checked = true;              
            })
        } else {
            $(".ckb").each(function() {
                this.checked = false;                      
            }) 
        }
    })

    // input number
    $('<div class="minus"><em>&ndash;</em></div>').prependTo($(".number"))
    $('<div class="more"><em>&plus;</em></div>').appendTo($(".number"))
    $(".number").each(function() {
        var number = $(this),
        input = number.find('input[type="number"]'),
        btn_up = number.find(".more"),
        btn_down = number.find(".minus"),
        min = input.attr("min"),
        max = input.attr("max")
        btn_up.click(function() {
            var old_value = parseFloat(input.val())
            if(old_value >= max)
                var new_value = old_value
            else
                var new_value = old_value + 1
            number.find("input").val(new_value)
            number.find("input").trigger("change")
        })
        btn_down.click(function() {
            var old_value = parseFloat(input.val())
            if(old_value <= min)
                var new_value = old_value
            else
                var new_value = old_value - 1
            number.find("input").val(new_value);
            number.find("input").trigger("change")
        })
    })

    // input password
    $('<span class="look">&#x1F441;</span>').appendTo($(".pswd"))
    $("input#pswd").on('keyup', function() { 
        if($(this).val().length >= 1) {
            var type = $(this).attr("type")
            if(type == "text") {
                $(".look").attr("title", "Ocultar senha")
            }
            if(type == 'password') {
                $(".look").attr("title", "Visualizar senha")
            }
        }
    })
    $(".look").on('click', function() {
        var type = $("#pswd").attr("type")
        if(type == 'text') {
            $("#pswd").attr("type", "password")
            $(".look").attr("title", "Visualizar senha")
            $(".look").addClass("hidden")
        }
        else {
            $("#pswd").attr("type", "text");
            $(".look").attr("title", "Ocultar senha")
            $(".look").removeClass("hidden")
        }
    })

    /**-----------------------------------
     *         textarea
     *                                   */
    // auto-height
    function autorise(textarea) {
        $(textarea).height(0);
        $(textarea).height($(textarea).prop("scrollHeight"))
    }
    $(document).on("input", ".auto_rise", function() {
        autorise(this);
    })
    $(".auto_rise").each(function () {
        autorise(this);
    })

    // transfere tag contenteditable para textarea
    $(".text_editable").bind('change keyup input', function() {
        var text_markup = $(this).html()
        $(".input_markup").html(text_markup)
    })

    // background-image
    $(".textarea_img__non_focus").on('focus', function() {
        $(this).css({"background-image": "none"}) 
    }).on('blur', function() { 
        if($(this)[0].value == '') { 
            $(this).css({
                "background-image": "url(//picsum.photos/id/227/640/150)",
                "background-size": "cover",
                "background-repeat": "no-repeat",
                "background-position": "center center"
            }) 
        } 
    })


    /**-----------------------------------
     *         Inputs file
     *                                   */

    // exibe caminho e nome do arquivo
    $("#btnfile").on('change', function() {
        var filename = $(this).val().replace(/C:\\fakepath\\/i, '')
        $("#filename").html(filename)
    })

    // FileReader image
    $("#input_img").on('change', function() {
        var image_holder = $("#load_img")
        image_holder.empty()
        var reader = new FileReader()
        reader.onload = function(e) {
            $('<img src="'+e.target.result+'" title="Trocar imagem" />').appendTo(image_holder);
        }
        image_holder.show()
        reader.readAsDataURL($(this)[0].files[0])
    })

    // FileReader background-image
    $("#input_bg").on('change', function() {
        var image_holder = $("#load_bg")
        image_holder.empty()
        var reader = new FileReader()
        reader.onload = function(e) {
            $('<div id="background_image" style="background-image:url('+e.target.result+')" title="Trocar imagem"></div>').appendTo(image_holder)
        }
        image_holder.show()
        reader.readAsDataURL($(this)[0].files[0])
    })

    // FileReader upload de multiplos arquivos
    $("#input_images").on('change', function() {
        var grid = $("#load_images")
        var files = event.target.files
        for(var i = 0; i < files.length; i++) {
            var file = files[i];
            if(!file.type.match('image')) continue;
            var reader = new FileReader();
            reader.onload = function(e) {
                var col = $('<div class="cnf_4"></div>').appendTo(grid)
                $('<img src="'+e.target.result+'" title="'+file.name+'"/>').appendTo(col)
            }
            reader.readAsDataURL(file);
        }
    })

    // FileReader video
    var reader, progress = $(".percent")
    function update_progress(evt) {
        if(evt.lengthComputable) {
            var percentLoaded = Math.round((evt.loaded / evt.total) * 100)
            if(percentLoaded <= 100) {
                progress.css("width", percentLoaded + "%")
                progress.text(percentLoaded + "%")
            }
        }
    }
    $("#input_video").on('change', function() {
        var preview_video = $("#load_video")
        //preview_video.empty()
        progress.css("width", "0%")
        progress.text("0%")
        var reader = new FileReader();
        reader.onprogress = update_progress
        var size = this.files[0].size
        if(size > 31457280) { // 30MB
            preview_video.html("O tamanho do arquivo excede o máximo permitido")
        } else {
            reader.onloadstart = function(e) {
                $("#progress").addClass("loading")
            }
            reader.onload = function(e) {
                progress.css("width", "100%")
                progress.text("100%")
                setTimeout(function() {
                    $("#progress").removeClass("loading")
                }, 2000)
                $('<video class="tvscreen" controls><source src="'+e.target.result+'" type="video/mp4" /></video>').appendTo(preview_video)
            }
        }
        preview_video.show()
        reader.readAsDataURL($(this)[0].files[0])
    })


    /**-----------------------------------
     *         Pré-visualizações
     *                                   */
    $('.preview_youtube').css("display", "none")
    $('.youtube_video').bind('change keyup input', function() {
        $('.preview_youtube').css("display", "block")
        var youtube_url = $(this).val()
        if(
            youtube_url.indexOf("https://youtube.com") > -1 ||
            youtube_url.indexOf("https://www.youtube.com") > -1 || 
            youtube_url.indexOf("//youtube.com") > -1
        ) {
            var embed = youtube_url.replace("watch?v=", "embed/")
            if(youtube_url.indexOf("&") > -1) {
                embed = embed.substring(0, embed.indexOf('&'))
                $('.preview_youtube iframe').attr("src", embed)
            }
            else {
                $('.preview_youtube iframe').attr("src", embed)
            }
        }
        else {
            $("#error_url").html("URL inválida")
        }
    })


    $(".parallax").each(function() {
        var source = $(this)
        $(window).scroll(function() {
            var distop   = $(window).scrollTop()
            var speed    = source.attr('data-speed')
            var speedTop = ( distop / speed )
            var calc     = + speedTop
            var posX     = "100% "
            var posY     = "-" + calc + "px"
            var bgpos    = posX + " " + posY;
            source.css("background-position", bgpos)
        })
    })

})