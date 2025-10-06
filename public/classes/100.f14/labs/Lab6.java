import java.util.*;

public class Lab6 {
    public static long sumOfMultiples(int limit) {
        long sum = 0;
	for (int i=1; i<limit; i++) {
	    if ((i%3 == 0) || (i%5 == 0)) {
		sum += i;
            }
	}
        return sum;
    }

    public static Map countDNA(String string) {
        Map<Character, Integer> counts = new HashMap<>();
        counts.put('A', 0);
        counts.put('C', 0);
        counts.put('G', 0);
        counts.put('T', 0);
        for (int i=0; i<string.length(); i++) {
            char c = string.charAt(i);
            Integer put = counts.put(c, counts.get(c)+1);
        }
        return counts;
    }
    
    public static void main(String argv[]) {
        int testToRun = 1;
        
        if (testToRun == 1) {
            System.out.println(sumOfMultiples(1000));
        } else {
            Map<Character, Integer> map = countDNA("ATGCTTCAGAAAGGTCTTACG");
            for (char c : map.keySet()) {
                System.out.println(c+": "+map.get(c));
            }
        }
    }
}
