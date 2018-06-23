insert into Person values ('John Terry','john@gmail.com',SHA1('john'),22/12/1992,'9096582949','409 Summit Ave,TX', 'end_user');
insert into Person values ('David Villa','david@gmail.com',SHA1('david'),21/12/1992,'6824727696','455 oak Street,TX', 'end_user');
insert into Person values ('Gary Cahill','gary@gmail.com',SHA1('gary'),13/12/1992,'4726829980','1002 greek row dr,TX', 'end_user');
insert into Person values ('Steven Gerrad','steven@gmail.com',SHA1('steven'),19/03/1991,'6824727708',' 122 park ave st,TX', 'end_user');
insert into Person values ('Michael Ballack','michael@gmail.com',SHA1('michael'),21/06/1993,'7852342226','40 maple street,TX', 'end_user');
insert into person values('Jason Roy', 'jason@gmail.com',sha1('jason'),'1992-10-10','6824724455','1010 greek row, CA','admin');
insert into person values('Antonio Martial', 'antonio@gmail.com',sha1('antonio'),'1989-11-29','6824772455','1105 greek row, NY','admin');




insert into currency values ('INR', 'India');
insert into currency values ('GBP','UK');
insert into currency values ('EUR','Germany');
insert into currency values ('USD', 'USA');

insert into currencydetails values ('INR', '65.03', '2018-03-16');
insert into currencydetails values ('INR', '64.90', '2018-03-14');
insert into currencydetails values ('INR', '65.00', '2018-03-15');
insert into currencydetails values ('GBP', '0.72', '2018-03-16');
insert into currencydetails values ('GBP', '0.71', '2018-03-14');
insert into currencydetails values ('GBP', '0.73', '2018-03-15');
insert into currencydetails values ('EUR', '0.81', '2018-03-16');
insert into currencydetails values ('EUR', '0.82', '2018-03-14');
insert into currencydetails values ('EUR', '0.80', '2018-03-15');


insert into item values('100152','phone', '1000','INR');
insert into item values('100153','ipad', '22','GBP');
insert into item values('100154','watch', '10','EUR');
insert into item values('100155','laptop', '66000','INR');
insert into item values('100156','watch', '2000','INR');
insert into item values('100157','mobile', '326.33','GBP');

insert into tradeitems values ('john@gmail.com','100152','sell');
insert into tradeitems values ('gary@gmail.com','100153','buy');
insert into tradeitems values ('david@gmail.com','100155','buy');
insert into tradeitems values ('gary@gmail.com','100156','sell');
insert into tradeitems values ('steven@gmail.com','100157','buy');


