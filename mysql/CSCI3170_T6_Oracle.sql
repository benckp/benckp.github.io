CREATE TABLE S1( sid integer primary key, name varchar(30) not null, year integer, age integer);  -- Intro
INSERT INTO S1 VALUES (1,'Peter',3,22);
INSERT INTO S1 VALUES (2,'John',2,20);
INSERT INTO S1 VALUES (3,'Mary',4,29);
SELECT * FROM S1;  -- Printing the entire table 
SELECT COUNT(*) FROM S1;  -- Count number of rows
UPDATE S1 SET age = 20 WHERE sid = 3; -- Update row
SELECT * FROM S1;
DESCRIBE S1;
DROP TABLE S1;

#@data;

SELECT * FROM captain; -- simple
SELECT * FROM captain WHERE cid < 5;
SELECT * FROM captain WHERE cid < 5 AND experiencehour > 3000;
SELECT cname FROM captain WHERE cid < 5 AND experiencehour > 3000;
SELECT cname AS name FROM captain WHERE experiencehour < 3000;

SELECT * FROM captain ORDER BY cid ASC; -- ordering
SELECT * FROM captain ORDER BY cid DESC;
SELECT * FROM route ORDER BY arrival_city ASC, departure_city ASC

SELECT COUNT(*) FROM captain, fly; -- joining
SELECT COUNT(*) FROM captain, fly WHERE captain.cid = fly.cid;
SELECT COUNT(*) FROM captain C, fly F WHERE C.cid = F.cid;

SELECT MAX(distance) FROM route; -- Minimum, maximum, sum and average
SELECT SUM(experiencehour), AVG(experiencehour) FROM captain;

SELECT DISTINCT cid FROM fly; -- Distinct Keyword
SELECT COUNT(DISTINCT cid) FROM fly;


SELECT cid, count(fid) FROM fly GROUP BY cid; -- GROUP BY and HAVING
SELECT cid, count(fid) FROM fly GROUP BY cid ORDER BY count(fid);
SELECT cid, count(fid) FROM fly GROUP BY cid HAVING count(fid) > 3;

CREATE OR REPLACE VIEW temp1 AS (SELECT DISTINCT cid FROM fly); -- view: to store results of queries that are used later
DROP VIEW temp1;

CREATE TABLE S1 (A INTEGER, B DATE); -- date
SELECT * FROM S1;
DROP TABLE S1;

--- pratise
SELECT * FROM route WHERE EXISTS (SELECT * FROM flight WHERE flight.flighthour > 10 AND route.rid = flight.rid);
SELECT R.rid FROM route R, flight F WHERE R.rid = F.rid AND F.flighthour > 5
GROUP BY R.rid HAVING COUNT(*) >= 1;


SELECT * FROM flight F1, flight F2
