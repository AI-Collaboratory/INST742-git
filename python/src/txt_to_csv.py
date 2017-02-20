import csv
import re
import collections
import json

txt_file = r"../data/a-001.txt"
out_file = r"../data/a-001.json"
out_csv = r"../data/a-001.csv"
 
# file_content = open(txt_file).read()
# tokens = nltk.word_tokenize(file_content)

parsed_data = {}  
section = 0

with open(txt_file) as f:
    for line in f:
        line = line.strip()
        line = ' '.join(line.split())
        
        if line.startswith("Security Map of"):
            section = 1
            parsed_data['0.b'] = ' '.join(f.readline().strip().split())
        elif line.startswith("a. Increasing"):
            parsed_data['1.a.1'] = ' '.join(f.readline().strip().split())
        elif line.startswith("Decreasing"):
            parsed_data['1.a.2'] = ' '.join(f.readline().strip().split())
        elif line.startswith("Static"):
            parsed_data['1.a.3'] = ' '.join(f.readline().strip().split())
        elif line.startswith("b. Class and Occupation"):
            parsed_data['1.b'] = ' '.join(f.readline().strip().split())
        elif line.startswith("c. Foreign Families"):
            parsed_data['1.c.1'] = ' '.join(f.readline().strip().split())
        elif line.startswith("Nationalities"):
            parsed_data['1.c.2'] = ' '.join(f.readline().strip().split())
        elif line.startswith("d. Negro"):
            datum = f.readline().strip() # 0 %
            no_percentage = re.match('[\d]', datum).group(0) # if wanting only the number 
            parsed_data['1.d'] = ' '.join(no_percentage.split())
        elif line.startswith("e. Shifting or Infiltration"):
            parsed_data['1.e'] = ' '.join(f.readline().strip().split())
        elif line.startswith("PREDOMINATING"):
            parsed_data['2.2'] = ' '.join(f.readline().strip().split())
        elif line.startswith("OTHER TYPE"):
            parsed_data['2.3'] = ' '.join(f.readline().strip().split())
            
        # Two-line reading
        elif line.startswith("a. Type and Size"):    
            parsed_data['2.a.1'] = ' '.join(f.readline().strip().split())
            k = f.readline()
            parsed_data['2.a.2'] = ' '.join(k.strip().split())
        elif line.startswith("b. Construction"):    
            parsed_data['2.b.1'] = ' '.join(f.readline().strip().split())
            k = f.readline()
            parsed_data['2.b.2'] = ' '.join(k.strip().split())
        elif line.startswith("c. Average Age"):    
            parsed_data['2.c.1'] = ' '.join(f.readline().strip().split())
            k = f.readline()
            parsed_data['2.c.2'] = ' '.join(k.strip().split())
        elif line.startswith("d. Repair"):    
            parsed_data['2.d.1'] = ' '.join(f.readline().strip().split())
            k = f.readline()
            parsed_data['2.d.2'] = ' '.join(k.strip().split())
        elif line.startswith("e. Occupancy"):    
            parsed_data['2.e.1'] = ' '.join(f.readline().strip().split())
            k = f.readline()
            parsed_data['2.e.2'] = ' '.join(k.strip().split())
        elif line.startswith("f. Owner-occupied"):    
            parsed_data['2.f.1'] = ' '.join(f.readline().strip().split())
            k = f.readline()
            parsed_data['2.f.2'] = ' '.join(k.strip().split())
        elif line.startswith("g. 1935 Price Bracket"):    
            parsed_data['2.g.1'] = ' '.join(f.readline().strip().split())
            k = f.readline()
            k = f.readline()
            parsed_data['2.g.2'] = ' '.join(k.strip().split())
        elif line.startswith("h. 1937 Price Bracket"):    
            parsed_data['2.h.1'] = ' '.join(f.readline().strip().split())
            k = f.readline()
            parsed_data['2.h.2'] = ' '.join(k.strip().split())
            k = f.readline()
            parsed_data['2.h.3'] = ' '.join(k.strip().split())
            k = f.readline()
            parsed_data['2.h.4'] = ' '.join(k.strip().split())
            k = f.readline()
            if (k.strip() == 'i.'):
                k = f.readline()
                parsed_data['2.i.1'] = ' '.join(k.strip().split())
                k = f.readline()
                k = f.readline()
                
                # omitting $ sign
                r = re.compile(r"\$")
                parsed_data['2.i.3'] = ' '.join(r.sub("", k).strip().split())
                k = f.readline()
                parsed_data['2.i.4'] = ' '.join(k.strip().split())
                k = f.readline()
                parsed_data['2.i.5'] = ' '.join(k.strip().split())          
                k = f.readline()
                parsed_data['2.i.6'] = ' '.join(k.strip().split())
        elif line.startswith("j. Sales Demand"):    
            parsed_data['2.j.1'] = ' '.join(f.readline().strip().split())
            k = f.readline()
            parsed_data['2.j.2'] = ' '.join(k.strip().split())
        elif line.startswith("k. Predicted Price Trend"):    
            parsed_data['2.k.1'] = ' '.join(f.readline().strip().split())
            k = f.readline()
            parsed_data['2.k.2'] = ' '.join(k.strip().split())
        elif line.startswith("l. 1935 Rent Bracket"):    
            parsed_data['2.l.1'] = ' '.join(f.readline().strip().split())
            k = f.readline()
            k = f.readline()
            parsed_data['2.l.2'] = ' '.join(k.strip().split())            
        elif line.startswith("m. 1937 Rent Bracket"):    
            parsed_data['2.m.1'] = ' '.join(f.readline().strip().split())
            k = f.readline()
            parsed_data['2.m.2'] = ' '.join(k.strip().split())
            k = f.readline()
            parsed_data['2.m.3'] = ' '.join(k.strip().split())
            k = f.readline()
            parsed_data['2.m.4'] = ' '.join(k.strip().split())
            k = f.readline()
            if (k.strip() == 'n.'):
                k = f.readline()
                parsed_data['2.n.1'] = ' '.join(k.strip().split())
                k = f.readline()
                k = f.readline()
    
                # omitting $ sign
                r = re.compile(r"\$")
                parsed_data['2.n.3'] = ' '.join(r.sub("", k).strip().split())
                k = f.readline()
                parsed_data['2.n.4'] = ' '.join(k.strip().split())
                k = f.readline()
                parsed_data['2.n.5'] = ' '.join(k.strip().split())          
                k = f.readline()
                parsed_data['2.n.6'] = ' '.join(k.strip().split())
            
        elif line.startswith("o. Rental Demand"):    
            parsed_data['2.o.1'] = ' '.join(f.readline().strip().split())
            k = f.readline()
            parsed_data['2.o.2'] = ' '.join(k.strip().split())
            
        elif line.startswith("p. Predicted Rent Trend"):    
            parsed_data['2.p.1'] = ' '.join(f.readline().strip().split())
            k = f.readline()
            parsed_data['2.p.2'] = ' '.join(k.strip().split())
        elif line.startswith("3. NEW CONSTRUCTION"):    
            parsed_data['3.a'] = ' '.join(f.readline().strip().split())
        elif line.startswith("Type & Price"):
            parsed_data['3.b'] = ' '.join(f.readline().strip().split())
        elif line.startswith("How Selling"):
            parsed_data['3.c'] = ' '.join(f.readline().strip().split())
            section = 4
        elif section == 4: 
            if line.startswith("a. HOLC"):
                parsed_data['4.a'] = ' '.join(f.readline().strip().split())
            elif line.startswith("b. Institutions"):
                parsed_data['4.b'] = ' '.join(f.readline().strip().split())
                section = 5
        elif section == 5: 
            if line.startswith("5. SALE OF HOME PROPERTIES"):
                # How do you extract only the digit?
                parsed_data['5'] = ' '.join(f.readline().strip().split())
            elif line.startswith("a. HOLC"):
                parsed_data['5.a'] = ' '.join(f.readline().strip().split())
            elif line.startswith("b. Institutions"):
                parsed_data['5.b'] = ' '.join(f.readline().strip().split())
            section = 6
        
        elif line.startswith("6. MORTGAGE FUNDS"):
            parsed_data['6'] = ' '.join(f.readline().strip().split())
        elif line.startswith("7. TOTAL TAX RATE PER $1000"):
            parsed_data['7.a'] = ' '.join(f.readline().strip().split())
            k = f.readline()
            parsed_data['7.b'] = ' '.join(k.strip().split())
        elif line.startswith("8. DESCRIPTION AND CHARACTERISTICS OF AREA"):
            parsed_data['8'] = ' '.join(f.readline().strip().split()) 
            section = 9
        elif section == 9:
            if line.startswith("9. LOCATION"):
                parsed_data['9.a'] = ' '.join(f.readline().strip().split()) 
            elif line.startswith("SECURITY GRADE"):
                parsed_data['9.b'] = ' '.join(f.readline().strip().split())
            elif line.startswith("AREA NO."):
                parsed_data['9.c'] = ' '.join(f.readline().strip().split())
            elif line.startswith("DATE"):
                parsed_data['9.d'] = ' '.join(f.readline().strip().split())
                k=f.readline()
                parsed_data['9.e'] = ' '.join(k.strip().split())    

od = collections.OrderedDict(sorted(parsed_data.items()))

with open(out_file, 'w') as outfile:
    json.dump(od, outfile)

with open(out_csv, 'w') as f:  # Just use 'w' mode in 3.x
    w = csv.DictWriter(f, od.keys())
    w.writeheader()
    w.writerow(od)

print ("Data processed successfully.")