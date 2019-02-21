![Liberfly](https://reclamacao.liberfly.com.br/logo-liberfly-azul.png)

# Teste Backend PHP

O desafio é criar um crud simples em PHP e que salve os dados no banco de dados (MySQL, Mongo, etc).

###### Exemplo
| ID | Nome              | telefone | email | aeroporto_origem | aeroporto_destino | numero_voo |
|----|-------------------|----------|-------|------------------|-------------------|------------|
| 1  | Wadson marcia     | 984234387|h@g.com| VIX              | POA               | 2534       |
| 2  | Kylton Saura      | 123454321|f@r.com| POA              | VIX               | 4323       |
| 3  | Edmundo Cassemiro | 172536123|r@t.com| GRU              | CGH               | 4234       |
| 4  | Raimundira M      | 743726487|d@p.com| VIX              | GRU               | 4556       |
| 5  | Pricila Kilder    | 123123323|y@i.com| CGH              | GRU               | 6538       |


Você pode ou não utilizar um framework, o objetivo do teste é avaliar a forma como o problema será resolvido

Faça um ***Fork*** deste repositório e abra um ***Pull Request***, **com seu nome na descrição**, para participar. Assim que terminar, envie um e-mail para ***ti@liberfly.com.br*** com o seu usuário do Github nos avisando.

Caso não tenha familiaridade com GIT, envie o desafio por email

-----

### Diferenciais

- Criar um frontend para com uma UX elaborada

### Instruções

- Fiz o CRUD com Laravel
- Usei Nginx e MySql
- Arquivo de configuração do Nginx (criar o arquivo em /etc/nginx/sites-available/ e criar o link simbólico em  /etc/nginx/sites-enabled/ )
```
server {
    listen 80;
    listen [::]:80;
    root /var/www/teste-liberfly/public;
    index  index.php index.html index.htm;
    server_name  testeliberfly.local.com;

    location / {
        try_files $uri $uri/ /index.php?$query_string;
    }


    location ~ \.php$ {
         try_files $uri =404;
         fastcgi_split_path_info  ^(.+\.php)(/.+)$;
         fastcgi_index            index.php;
         fastcgi_pass             unix:/var/run/php/php7.2-fpm.sock;
         include                  fastcgi_params;
         fastcgi_param   PATH_INFO       $fastcgi_path_info;
         fastcgi_param   SCRIPT_FILENAME $document_root$fastcgi_script_name;
    }

}
```
- Alterar a linha root para a pasta que esta localizada o projeto e caso o PHP esteja em outra versão altere também.
- Adicionar a seguinte linha em: /etc/hosts ``` 127.0.0.1       testeliberfly.local.com ```
- Reiniciar o serviço do Nginx.
- Dar permissão na pasta storage que fica dentro da pasta do projeto, com o seguinte comando: ``` sudo chmod -R 777 storage/ ```
- Configurar o banco no arquivo .env
- Dentro da pasta do projeto execute os seguintes comandos:
- ``` php artisan migrate ```
- ``` php artisan db:seed ```
- Para acessar o site basta digitar no navegador: ``` testeliberfly.local.com ```
