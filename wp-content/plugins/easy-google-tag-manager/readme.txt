=== Easy Google Tag Manager ===
Contributors: luizjrdeveloper, samueldreinerfx
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_donations&business=MUFG5Z74C3PNE&lc=BR&item_name=Luiz%20Silva&currency_code=USD&bn=PP%2dDonationsBF%3abtn_donateCC_LG%2egif%3aNonHosted
Tags: google, tag manager, tag management, google tag manager, analytics, theme hook alliance, genesis
Requires at least: 2.7
Tested up to: 5.1
Stable tag: 1.2.7
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

O plugin Easy Google Tag Manager adiciona um campo à página Configurações gerais existentes para o ID e exibe o javascript no rodapé frontal.

== Descrição ==

[Você pode se inscrever para uma conta do Gerenciador de tags do Google aqui.](https://www.google.com/tagmanager/ "Google Tag Manager")

Este plugin torna ainda mais fácil usar o Gerenciador de Tags do Google, adicionando todo o código em si - tudo o que você precisa fazer é fornecer a identificação da conta!

== Instalação ==

1. Faça o upload da pasta `easy-google-tag-manager` para o diretório `/wp-content/plugins/`
1. Ative o plugin através do menu 'Plugins' no WordPress
1. Vá até `Configurações` > `Geral` e configure a ID da sua conta do Gerenciador de Tags do Google.

== Screenshots ==

1. Vá até `Configurações`
2. `Geral` e configure a ID da sua conta do Gerenciador de Tags do Google.

== Perguntas Frequentes ==

= Por que a exibição de saída não está funcionando? =
Duas possibilidades: primeiro, você ainda não especificou o ID no painel de administração ou, em segundo lugar, o seu tema falta uma chamada de `<?php wp_footer(); ?>` no footer.php ou no rodapé acima do fechamento da Tag `</body>`.

== Changelog ==

= 1.2.7 =
* Testado na versão 5.1 do WordPress.

= 1.2.6 =
* Fix pasta/diretório assets.

= 1.2.5 =
* Fix Plugin Header

= 1.2.4 =
* Adicionando Screenshots Fix

= 1.2.3 =
* Adicionando Screenshots

= 1.2.2 =
* Fix icones e capas

= 1.2.1 =
* Atualizando Capas e Icones

= 1.0.1 =
* Mude para o novo formato dividido para o javascript do Google Tag Manager e o formato iframe.
* Adicione suporte para os temas Genesis e Theme Hook Alliance para fazer eco do iframe mais cedo na dom.
* Alterar para métodos estáticos para evitar erros em algumas versões do php

= 1.0 =
* Liberação pública inicial

== Aviso de Atualização ==

= 1.0 =
Liberação pública inicial
