#ifdef __BORLANDC__
// suppress the warning message that functions containing for are not
// expanded inline
#pragma warn -8027
#endif	// __BORLANDC__


// input a graph
friend istream& operator>> (istream& istr, graph<T>& g)
{
    // nVertices is number of vertices to read
    int i, nVertices, nEdges;
    // use for input of vertices (v1) and edges ( {v1, v2} )
    T v1, v2;
    // edge weight
    int weight;

    if (g.numVertices > 0)
	// remove an existing graph
	g.clear();

    // input the number of vertices
    istr >> nVertices;

    // input the vertices and insert each into the graph
    for (i = 0; i < nVertices; i++)
    {
	istr >> v1;
	g.insertVertex(v1);
    }

    // input the number of edges
    istr >> nEdges;

    // input the vertices and weight for each edge, and
    // insert it into the graph
    for (i = 0; i < nEdges; i++)
    {
	istr >> v1;
	istr >> v2;
	istr >> weight;
	g.insertEdge(v1,v2,weight);
    }

    // return the stream
    return istr;
}

// output a graph
friend ostream& operator<< (ostream& ostr, const graph<T>& g)
{
    vertexInfo<T> vtxInfo;
    set<neighbor>::iterator setIter;

    size_t i;

    for (i = 0; i < g.vInfo.size(); i++)
    {
	vtxInfo = g.vInfo[i];
	if (vtxInfo.occupied)
	{
	    ostr << (*(vtxInfo.vtxMapLoc)).first << ": in-degree " << vtxInfo.inDegree
		 << "  out-degree " << (vtxInfo.edges).size() << endl;
	    ostr << "    Edges: ";
	    set<neighbor>& edgeSet = vtxInfo.edges;
	    for (setIter = edgeSet.begin(); setIter != edgeSet.end(); setIter++)
	    {
		ostr << (*(g.vInfo[(*setIter).dest].vtxMapLoc)).first << " ("
		     << (*setIter).weight << ")  ";
	    }
	    ostr << endl;
	}
    }
    return ostr;
}

// perform the breadth-first traversal from sVertex and
// return the set of visited vertices
friend set<T> bfs(graph<T>& g, const T& sVertex)
{
    // BFS uses a queue to store indices of adjacent vertices from vInfo
    queue<int> visitQueue;

    // set of vertices in BFS
    set<T> visitSet;

    // use to store indices in vInfo
    int currVertex, neighborVertex;

    // use to search edge sets for unvisited vertices
    set<neighbor>::iterator adj;

    // find the index of the starting vertex
    currVertex = g.getvInfoIndex(sVertex);

    // check for a nonexistent starting vertex
    if (currVertex == -1)
	throw graphError("graph bfs(): vertex not in the graph");

    // initialize all vertices in the graph to unvisited (WHITE)
    for (size_t i=0;i < g.vInfo.size(); i++)
	if (g.vInfo[i].occupied)
	    g.vInfo[i].color = vertexInfo<T>::WHITE;

    visitQueue.push(currVertex);   // initialize the queue

    while (!visitQueue.empty())
    {
	// remove a vertex from the queue
	currVertex = visitQueue.front();
	visitQueue.pop();
	// indicate that the vertex has been visited
	g.vInfo[currVertex].color = vertexInfo<T>::BLACK;

	// put the vertex in visitSet
	visitSet.insert((*(g.vInfo[currVertex].vtxMapLoc)).first);

	// create an alias for the edge set of currVertex
	set<neighbor>& edgeSet = g.vInfo[currVertex].edges;
	// sequence through the edge set and look for vertices
	// that have not been visited
	for (adj = edgeSet.begin(); adj != edgeSet.end(); adj++)
	{
	    neighborVertex = (*adj).dest;

	    if (g.vInfo[neighborVertex].color == vertexInfo<T>::WHITE)
	    {
		g.vInfo[neighborVertex].color = vertexInfo<T>::GRAY;
		visitQueue.push(neighborVertex);
	    }
	}
    }

    return visitSet;
}
