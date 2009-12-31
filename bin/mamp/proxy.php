function FindProxyForURL(url, host) {
	if (shExpMatch(url,"*localhost/*"))
		return "PROXY 127.0.0.1:80";
	return "DIRECT";
}
