# CRUD gerenciador de tarefas em CakePHP

Para rodar o projeto primeiramente é preciso clonar o repositório em sua máquina
pelo git, o projeto está na pasta `questao_4`.

Após baixado entre na pasta `questao_4` e rode o comando `composer install` na 
linha de comando para que o **Composer** instale as dependências.

> **Nota**: é necessário que o Composer já esteja instalado na máquina previamente.

Para que o sistema funcione é preciso rodar o seguinte scrip no **MySQL** que cria
o banco de dados que será usado.

```sql
CREATE TABLE questao4.tarefas (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(23) DEFAULT NULL,
  `descricao` text,
  `prioridade` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8
```

Terminado o processo é preciso entrar no arquivo **config/app.php** para definir
a conexão com o bando de dados. Procure o seguinte trecho:

```php
'Datasources' => [
        'default' => [
            'className' => 'Cake\Database\Connection',
            'driver' => 'Cake\Database\Driver\Mysql',
            'persistent' => false,
            'host' => 'localhost',
            /*
             * CakePHP will use the default DB port based on the driver selected
             * MySQL on MAMP uses port 8889, MAMP users will want to uncomment
             * the following line and set the port accordingly
             */
            //'port' => 'non_standard_port_number',
            'username' => 'my_app',
            'password' => 'secret',
            'database' => 'my_app',
            /*
             * You do not need to set this flag to use full utf-8 encoding (internal default since CakePHP 3.6).
             */
            //'encoding' => 'utf8mb4',
            'timezone' => 'UTC',
            'flags' => [],
            'cacheMetadata' => true,
            'log' => false,
```

Altere os valores de `username`, `password` para os valores devidos do mysql e 
`database` precisa ter o valor `questao4`.

Terminados os passos de configuração é preciso apenas servir a aplicação pelo
próprio cakePHP com o seguinte comando no terminal: `bin/cake server`.

Obrigado pela atenção e até logo!
