
public class A1Encr {
    static String plaintext = "OMITTED!";

    public static void main(String argv[]) {
	int ka = 0, kb = 0;  // These two values hold the secret key

	for (int i=0; i<plaintext.length(); i++) {
	    int ctval = (ka * plaintext.charAt(i) + kb)%256;
	    System.out.printf("\\%o",ctval);
	}
    }
}
