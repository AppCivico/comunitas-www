<?php

use Illuminate\Database\Seeder;

class WebinarsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('webinars')->delete();
        
        \DB::table('webinars')->insert(array (
            0 => 
            array (
                'id' => 2,
                'title' => 'O conhecimento que criamos é gerado com base em experiências.',
                'body' => '<p style="background-repeat: no-repeat; box-sizing: inherit; tab-size: inherit; line-height: 1.5; text-decoration-line: inherit; vertical-align: inherit; padding: 0px; margin-top: 0px; margin-bottom: 1em; max-width: 35em; orphans: 3; widows: 3; color: #212121; font-family: \'Open Sans\', sans-serif; font-size: 16.0016px;">"Ter uma pol&iacute;tica de conhecimento aberto significa ter uma s&eacute;rie de normas, processos e protocolos definidos, envolvendo todas as &aacute;reas da organiza&ccedil;&atilde;o, n&atilde;o somente a produ&ccedil;&atilde;o de conhecimento&rdquo;</p>
<p style="background-repeat: no-repeat; box-sizing: inherit; tab-size: inherit; line-height: 1.5; text-decoration-line: inherit; vertical-align: inherit; padding: 0px; margin-top: 0px; margin-bottom: 1em; max-width: 35em; orphans: 3; widows: 3; color: #212121; font-family: \'Open Sans\', sans-serif; font-size: 16.0016px;">&middot; Com a licen&ccedil;a Creative Commons da Rede Juntos, a Comunitas &eacute; a primeira organiza&ccedil;&atilde;o social brasileira a implementar uma pol&iacute;tica de educa&ccedil;&atilde;o aberta;</p>
<p style="background-repeat: no-repeat; box-sizing: inherit; tab-size: inherit; line-height: 1.5; text-decoration-line: inherit; vertical-align: inherit; padding: 0px; margin-top: 0px; margin-bottom: 1em; max-width: 35em; orphans: 3; widows: 3; color: #212121; font-family: \'Open Sans\', sans-serif; font-size: 16.0016px;">&middot; A rede juntos em 2018 recebeu quase 70 mil acessos e mais de 20 mil servidores buscaram conte&uacute;do na plataforma;</p>
<p style="background-repeat: no-repeat; box-sizing: inherit; tab-size: inherit; line-height: 1.5; text-decoration-line: inherit; vertical-align: inherit; padding: 0px; margin-top: 0px; margin-bottom: 1em; max-width: 35em; orphans: 3; widows: 3; color: #212121; font-family: \'Open Sans\', sans-serif; font-size: 16.0016px;">&middot; Al&eacute;m de v&iacute;deos e podcasts (baixados mais de 700 vezes), a Rede Juntos conta, ainda, com a realiza&ccedil;&atilde;o de webin&aacute;rios e mini-cursos com especialistas na &aacute;rea.</p>',
                'image' => 'webinars-page/June2020/v2XIQXsxY9xNvUpa5O2o.jpg',
                'meta_description' => 'Descrição de SEO',
                'created_at' => '2020-06-12 22:38:01',
                'updated_at' => '2020-06-12 22:38:01',
                'seo_title' => 'Título de SEO',
            ),
        ));
        
        
    }
}