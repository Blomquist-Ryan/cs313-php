CREATE TABLE Person
(
	User_id SERIAL NOT NULL PRIMARY KEY	,
	Name VARCHAR(50) NOT NULL,
	Comp_analysis_id INT NOT NULL REFERENCES Comp_analysis(id),
	Muscle_fat_id INT NOT NULL REFERENCES Muscle(id),
	Obesity_id INT NOT NULL REFERENCES Obesity(id),
	Lean_id INT NOT NULL REFERENCES Lean(id),
	History_id INT NOT NULL REFERENCES History(id)
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
	Seg_fat_id INT NOT NULL REFERENCES Seg_fat(id)
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
Rarm REAL NOT NULL,
Larm REAL NOT NULL,
Trunk REAL NOT NULL,
Rleg REAL NOT NULL,
Lleg REAL NOT NULL
);
CREATE TABLE History
(
	Id SERIAL NOT NULL PRIMArY KEY,
	Weight REAL NOT NULL,
	Smm REAL NOT NULL,
	PBF REAL NOT NULL,
	Water REAL NOT NULL
);