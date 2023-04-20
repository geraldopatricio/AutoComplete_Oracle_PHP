<p align="center">
  <img src="./assets/images/logo.png" width="300" alt="PHP" /></a>
</p>

# AutoComplete_Oracle_PHP
Modelo de Auto-Complete usando Oracle e PHP via PDO

## Objetivo
```bash
Tela contendo 3 campos nome, cidade e uf, onde vc irá pesquisar pelo nome e irá trazer um 
autocomplete filtrando os nomes da tabela e recupeando o restante dos campos para serem tratados.

Simples, básico e fácil!
```

## Requisitos
```bash
PHP, Oracle, PDO

Tabela:
CREATE TABLE AUTO_COMPLETE (
	ID INTEGER NULL,
	NOME VARCHAR2(100) NULL,
	CIDADE VARCHAR2(50) NULL,
	UF VARCHAR2(2) NULL,
	PRIMARY KEY(ID)	
);

INSERT INTO AUTO_COMPLETE (ID, NOME, CIDADE, UF) VALUES (1,'ANTONIO LIMA','FORTALEZA','CE')
INSERT INTO AUTO_COMPLETE (ID, NOME, CIDADE, UF) VALUES  (2,'ANTONIO BEZERRA','EUSEBIO','CE')
INSERT INTO AUTO_COMPLETE (ID, NOME, CIDADE, UF) VALUES  (3,'ANTONIO BARBOSA','RIO DE JANEIRO','RJ')
INSERT INTO AUTO_COMPLETE (ID, NOME, CIDADE, UF) VALUES  (4,'MARIA DA SILVA','MANAUS','AM')
INSERT INTO AUTO_COMPLETE (ID, NOME, CIDADE, UF) VALUES  (5,'MARIA LIMA','BELEM','PA')
INSERT INTO AUTO_COMPLETE (ID, NOME, CIDADE, UF) VALUES  (6,'DAGOBERTO DE SOUZA','MACAPA','AP')
INSERT INTO AUTO_COMPLETE (ID, NOME, CIDADE, UF) VALUES  (7,'DANDARA FEITOSA','SALVADOR','BA')
INSERT INTO AUTO_COMPLETE (ID, NOME, CIDADE, UF) VALUES  (8,'JOSE SILVA LIMA','JOAO PESSOA','PB')
INSERT INTO AUTO_COMPLETE (ID, NOME, CIDADE, UF) VALUES  (9,'JOSE LIMA','SANTAREM','PA')
INSERT INTO AUTO_COMPLETE (ID, NOME, CIDADE, UF) VALUES  (10,'PEDRO SOUSA','SÃO PAULO','SP')

```

## suporte
```bash
WhatsApp: (85) 9 9150-8104
Mail: geraldo@gpsoft.com.br
```
