CREATE TABLE Person
(
	User_id SERIAL NOT NULL PRIMARY KEY	,
	Name VARCHAR(50) NOT NULL,
	INumber INT NOT NULL,
	date DATE NOT NULL,
	Comp_analysis_id SERIAL NOT NULL REFERENCES Comp_analysis(id),
	Muscle_fat_id SERIAL NOT NULL REFERENCES Muscle(id),
	Obesity_id SERIAL NOT NULL REFERENCES Obesity(id),
	Lean_id SERIAL NOT NULL REFERENCES Lean(id),
	History_id SERIAL NOT NULL REFERENCES History(id)
);
CREATE TABLE Comp_analysis
(
	Id SERIAL NOT NULL PRIMARY KEY,
	Intra REAL NOT NULL,
	Extra REAL NOT NULL,
	Dry_Lean REAL NOT NULL,
	Body_fat  REAL NOT NULL
);
CREATE TABLE Muscle
(
	Id SERIAL NOT NULL PRIMARY KEY,
	Weight 	REAL NOT NULL,
	Smm REAL NOT NULL,
	Fat REAL NOT NULL
);
CREATE TABLE Obesity
(
	Id SERIAL NOT NULL PRIMARY KEY,
	Bmi REAL NOT NULL,
	PBF REAL NOT NULL,
	Seg_fat_id SERIAL NOT NULL REFERENCES Seg_fat(id)
);
CREATE TABLE Seg_fat
(
	Id SERIAL NOT NULL PRIMARY KEY,
	Rarm REAL NOT NULL,
	Larm REAL NOT NULL,
	Trunk REAL NOT NULL,
	Rleg REAL NOT NULL,
	Lleg REAL NOT NULL
);
CREATE TABLE Lean
(
Id SERIAL NOT NULL PRIMARY KEY,
RarmL REAL NOT NULL,
LarmL REAL NOT NULL,
TrunkL REAL NOT NULL,
RlegL REAL NOT NULL,
LlegL REAL NOT NULL
);
CREATE TABLE History
(
	Id SERIAL NOT NULL PRIMArY KEY,
	Weight REAL NOT NULL,
	Smm REAL NOT NULL,
	PBF REAL NOT NULL,
	Water REAL NOT NULL
);
INSERT INTO person VALUES(1, 'Ryan Blomquist', 087097322, '01-21-2019', 1, 1, 1, 1, 1);
 INSERT INTO person VALUES(2, 'Ryan Blomquist', 087097322, '02-25-2019', 2, 2, 2, 2, 2);
 INSERT INTO History VALUES (2, 148.1, 81.1, 4.5, .366);
 INSERT INTO Lean VALUES (1, 7.45, 7.56, 59.4, 21.21, 21.01);
 INSERT INTO Lean VALUES (2, 8.09, 8.25, 63.1, 22.42, 21.96);
 INSERT INTO Seg_fat VALUES(2, .2, .2, 1.1, 1.5, 1.5);
  INSERT INTO Obesity VALUES(1, 20.1, 7.8, 1);
 INSERT INTO Obesity VALUES(2, 20.7, 4.5, 2);
 INSERT INTO Muscle VALUES(2, 148.1, 81.1, 6.6);
 INSERT INTO Comp_analysis VALUES(2, 65.5, 38.1, 37.9, 6.6);