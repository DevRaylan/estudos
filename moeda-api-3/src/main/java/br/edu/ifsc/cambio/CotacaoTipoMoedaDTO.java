package br.edu.ifsc.cambio;

public class CotacaoTipoMoedaDTO {
	private double valor;
	private String operacao;
	private double dc;
	private double dp;
	private double dx;
	private double dt;
	private double eu;
	private double ou;
	public CotacaoTipoMoedaDTO(double valor, String operacao, double dc, double dp, double dx, double dt, double eu,
			double ou) {
		super();
		this.valor = valor;
		this.operacao = operacao;
		this.dc = dc;
		this.dp = dp;
		this.dx = dx;
		this.dt = dt;
		this.eu = eu;
		this.ou = ou;
	}
	public CotacaoTipoMoedaDTO() {
		super();
	}
	public double getValor() {
		return valor;
	}
	public void setValor(double valor) {
		this.valor = valor;
	}
	public String getOperacao() {
		return operacao;
	}
	public void setOperacao(String operacao) {
		this.operacao = operacao;
	}
	public double getDc() {
		return dc;
	}
	public void setDc(double dc) {
		this.dc = dc;
	}
	public double getDp() {
		return dp;
	}
	public void setDp(double dp) {
		this.dp = dp;
	}
	
	public double getDx() {
		return dx;
	}
	
	public void setDx(double dx) {
		this.dx = dx;
	}
	
	public double getDt() {
		return dt;
	}
	public void setDt(double dt) {
		this.dt = dt;
	}
	public double getEu() {
		return eu;
	}
	public void setEu(double eu) {
		this.eu = eu;
	}
	public double getOu() {
		return ou;
	}
	public void setOu(double ou) {
		this.ou = ou;
	}

}