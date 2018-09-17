# Loja Virtual
Loja Virtual utilizando o framework Symfony versão 4.1.3 e PHP 7.2.8.

## Uso
O modelo de dados se encontra em public/db/lojaVirtual.mwb, caso não consiga realizar o forward engineering utilize o sql.

Por padrão está definido no arquivo .env o drive do banco como MySQL em DATABASE_URL=mysql://root:root@127.0.0.1:3306/lojaVirtual.
Caso use o PostgreSQL, mude em config/packages/doctrine.yaml na linha do driver e também no .env com porta 5432.

Após o banco pronto, na pasta raiz rode o comando : php bin\console server:run
